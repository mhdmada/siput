<?php

namespace App\Controllers;
use App\Models\RekapModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Controllers\AdminBaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminRekapLaporan extends AdminBaseController
{
    public function index()
    {
        $model = model(RekapModel::class);

        // Ambil keyword dari input pencarian
        $keyword = $this->request->getVar('keyword');
        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('nama_pelatihan', $keyword)
                  ->orLike('jadwal_pelatihan', $keyword)
                  ->orLike('lokasi_pelatihan', $keyword)
                  ->orLike('jumlah_peserta', $keyword);
        }

        if ($bulan && $tahun) {
            $model->where('MONTH(jadwal_pelatihan)', $bulan);
            $model->where('YEAR(jadwal_pelatihan)', $tahun);
        }

        // Hitung total hasil pencarian
        $totalResults = $model->countAllResults(false);

        $data = [
            'rekap' => $model->paginate(5),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'bulan' => $bulan,
            'tahun' => $tahun,
            'noResults' => ($totalResults == 0),
            'totalResults' => $totalResults
        ];

        return view('admin/rekap_laporan/get', $data);
    }

    public function export()
    {
        $model = new RekapModel();
    
        // Ambil parameter filter dari request
        $keyword = $this->request->getVar('keyword');
        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');
    
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('nama_pelatihan', $keyword)
                  ->orLike('jadwal_pelatihan', $keyword)
                  ->orLike('lokasi_pelatihan', $keyword)
                  ->orLike('jumlah_peserta', $keyword);
        }
    
        // Filter data berdasarkan bulan dan tahun
        if ($bulan && $tahun) {
            $model->where('MONTH(jadwal_pelatihan)', $bulan);
            $model->where('YEAR(jadwal_pelatihan)', $tahun);
        }
    
        $rekap = $model->findAll();
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Header
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Pelatihan');
        $sheet->setCellValue('C1', 'Jadwal Pelatihan');
        $sheet->setCellValue('D1', 'Lokasi Pelatihan');
        $sheet->setCellValue('E1', 'Jumlah Peserta');
    
        // Data
        $row = 2;
        foreach ($rekap as $index => $data) {
            $sheet->setCellValue('A' . $row, $index + 1);
            $sheet->setCellValue('B' . $row, $data['nama_pelatihan']);
            $sheet->setCellValue('C' . $row, $data['jadwal_pelatihan']);
            $sheet->setCellValue('D' . $row, $data['lokasi_pelatihan']);
            $sheet->setCellValue('E' . $row, $data['jumlah_peserta']);
            $row++;
        }
    
        $sheet->getStyle('A1:E1')->getFont()->setBold(true);
        $sheet->getStyle('A1:E1')->getFill()
            ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
            ->getStartColor()->setARGB('4169E1');
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'FF000000'],
                ],
            ],
        ];
        $sheet->getStyle('A1:E'.($row-1))->applyFromArray($styleArray);
    
        $sheet->getColumnDimension('A')->setAutoSize(true);
        $sheet->getColumnDimension('B')->setAutoSize(true);
        $sheet->getColumnDimension('C')->setAutoSize(true);
        $sheet->getColumnDimension('D')->setAutoSize(true);
        $sheet->getColumnDimension('E')->setAutoSize(true);
    
        $writer = new Xlsx($spreadsheet);
        $fileName = 'Laporan_Pelatihan_UMKM.xlsx';
    
        // Redirect output to a client’s web browser (Xlsx)
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $fileName . '"');
        header('Cache-Control: max-age=0');
        header('Cache-Control: max-age=1');
    
        $writer->save('php://output');
        exit;
    }
}
