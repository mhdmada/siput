<?php

namespace App\Controllers;
use App\Models\SyaratPelatihanModel;
use App\Models\PendaftaranModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Controllers\AdminBaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminRekapLaporan extends AdminBaseController
{
    public function index()
    {
        $syaratpelatihanmodel = model(SyaratPelatihanModel::class);
        $pendaftaranmodel = model(PendaftaranModel::class);

        // Ambil keyword dari input pencarian
        $keyword = $this->request->getVar('keyword');
        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $syaratpelatihanmodel->like('judul', $keyword)
                  ->orLike('lokasi', $keyword)
                  ->orLike('jadwal', $keyword);
        }

        if ($bulan && $tahun) {
            $syaratpelatihanmodel->where('MONTH(jadwal)', $bulan);
            $syaratpelatihanmodel->where('YEAR(jadwal)', $tahun);
        }

        // Hitung total hasil pencarian
        $totalResults = $syaratpelatihanmodel->countAllResults(false);

        $syarat_pelatihan = $syaratpelatihanmodel->paginate(10);

        // Hitung jumlah peserta untuk setiap pelatihan
        $total_pendaftar = $pendaftaranmodel->countAllResults();
        

        $data = [
            'syarat_pelatihan' =>$syarat_pelatihan,
            'jumlah_peserta' => $total_pendaftar,
            'pager' => $syaratpelatihanmodel->pager,
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
        $syaratpelatihanmodel = model(SyaratPelatihanModel::class);
        $pendaftaranmodel = model(PendaftaranModel::class);
    
        // Ambil parameter filter dari request
        $keyword = $this->request->getVar('keyword');
        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');
    
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $syaratpelatihanmodel->like('judul', $keyword)
                  ->orLike('jadwal', $keyword)
                  ->orLike('lokasi', $keyword);
        }
    
        // Filter data berdasarkan bulan dan tahun
        if ($bulan && $tahun) {
            $syaratpelatihanmodel->where('MONTH(jadwal)', $bulan);
            $syaratpelatihanmodel->where('YEAR(jadwal)', $tahun);
        }

        $rekap = $syaratpelatihanmodel->findAll();
    
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
    
        // Header
        $sheet->setCellValue('A1', 'NO');
        $sheet->setCellValue('B1', 'NAMA PELATIHAN');
        $sheet->setCellValue('C1', 'JADWAL PELATIHAN');
        $sheet->setCellValue('D1', 'LOKASI PELATIHAN');
        $sheet->setCellValue('E1', 'JUMLAH PESERTA');
    
        // Data
        $row = 2;
        foreach ($rekap as $index => $data)
        $total_pendaftar = $pendaftaranmodel->countAllResults();
        {
            $sheet->setCellValue('A' . $row, $index + 1);
            $sheet->setCellValue('B' . $row, $data['judul']);
            $sheet->setCellValue('C' . $row, $data['jadwal']);
            $sheet->setCellValue('D' . $row, $data['lokasi']);
            $sheet->setCellValue('E' . $row, $total_pendaftar);
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
