<?php

namespace App\Controllers;
use App\Models\UmkmModel;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use App\Controllers\AdminBaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminLaporan extends AdminBaseController
{
    public function index()
    {
        $model = model(UmkmModel::class);

        // Ambil keyword dari input pencarian
        $keyword = $this->request->getVar('keyword');
        $bulan = $this->request->getVar('bulan');
        $tahun = $this->request->getVar('tahun');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('nik', $keyword)
                  ->orLike('nama', $keyword)
                  ->orLike('nama_usaha', $keyword)
                  ->orLike('alamat', $keyword)
                  ->orLike('kelurahan', $keyword)
                  ->orLike('kecamatan', $keyword)
                  ->orLike('alamat_usaha', $keyword)
                  ->orLike('bidang_usaha', $keyword)
                  ->orLike('nib', $keyword)
                  ->orLike('npwp', $keyword)
                  ->orLike('omzet_biaya', $keyword)
                  ->orLike('jumlah_tenaga_kerja', $keyword)
                  ->orLike('no_hp', $keyword);
        }

        if ($bulan && $tahun) {
            $model->where('MONTH(created_at)', $bulan);
            $model->where('YEAR(created_at)', $tahun);
        }

        // Hitung total hasil pencarian
        $totalResults = $model->countAllResults(false);

        $data = [
            'umkm' => $model->paginate(5),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'bulan' => $bulan,
            'tahun' => $tahun,
            'noResults' => ($totalResults == 0),
            'totalResults' => $totalResults
        ];

        return view('admin/laporan/get', $data);
    }

    public function export()
{
    $model = new UmkmModel();

    // Ambil parameter filter dari request
    $keyword = $this->request->getVar('keyword');
    $bulan = $this->request->getVar('bulan');
    $tahun = $this->request->getVar('tahun');

    // Cek apakah ada keyword yang diinputkan
    if ($keyword) {
        $model->like('nik', $keyword)
              ->orLike('nama', $keyword)
              ->orLike('nama_usaha', $keyword)
              ->orLike('alamat', $keyword)
              ->orLike('kelurahan', $keyword)
              ->orLike('kecamatan', $keyword)
              ->orLike('alamat_usaha', $keyword)
              ->orLike('bidang_usaha', $keyword)
              ->orLike('nib', $keyword)
              ->orLike('npwp', $keyword)
              ->orLike('omzet_biaya', $keyword)
              ->orLike('jumlah_tenaga_kerja', $keyword)
              ->orLike('no_hp', $keyword);
    }

    // Filter data berdasarkan bulan dan tahun
    if ($bulan && $tahun) {
        $model->where('MONTH(created_at)', $bulan);
        $model->where('YEAR(created_at)', $tahun);
    }

    $umkm = $model->findAll();

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    // Header
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'NIK');
    $sheet->setCellValue('C1', 'Nama');
    $sheet->setCellValue('D1', 'Nama Usaha');
    $sheet->setCellValue('E1', 'Alamat');
    $sheet->setCellValue('F1', 'Kelurahan');
    $sheet->setCellValue('G1', 'Kecamatan');
    $sheet->setCellValue('H1', 'Alamat Usaha');
    $sheet->setCellValue('I1', 'Bidang Usaha');
    $sheet->setCellValue('J1', 'NIB');
    $sheet->setCellValue('K1', 'NPWP');
    $sheet->setCellValue('L1', 'Omzet Biaya');
    $sheet->setCellValue('M1', 'Jumlah Tenaga Kerja');
    $sheet->setCellValue('N1', 'No.Hp/Wa');

    // Data
    $row = 2;
    foreach ($umkm as $index => $data) {
        $sheet->setCellValue('A' . $row, $index + 1);
        $sheet->setCellValue('B' . $row, $data['nik']);
        $sheet->setCellValue('C' . $row, $data['nama']);
        $sheet->setCellValue('D' . $row, $data['nama_usaha']);
        $sheet->setCellValue('E' . $row, $data['alamat']);
        $sheet->setCellValue('F' . $row, $data['kelurahan']);
        $sheet->setCellValue('G' . $row, $data['kecamatan']);
        $sheet->setCellValue('H' . $row, $data['alamat_usaha']);
        $sheet->setCellValue('I' . $row, $data['bidang_usaha']);
        $sheet->setCellValue('J' . $row, $data['nib']);
        $sheet->setCellValue('K' . $row, $data['npwp']);
        $sheet->setCellValue('L' . $row, $data['omzet_biaya']);
        $sheet->setCellValue('M' . $row, $data['jumlah_tenaga_kerja']);
        $sheet->setCellValue('N' . $row, $data['no_hp']);
        $row++;
    }

    $sheet->getStyle('A1:N1')->getFont()->setBold(true);
    $sheet->getStyle('A1:N1')->getFill()
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
    $sheet->getStyle('A1:N'.($row-1))->applyFromArray($styleArray);

    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);
    $sheet->getColumnDimension('G')->setAutoSize(true);
    $sheet->getColumnDimension('H')->setAutoSize(true);
    $sheet->getColumnDimension('I')->setAutoSize(true);
    $sheet->getColumnDimension('J')->setAutoSize(true);
    $sheet->getColumnDimension('K')->setAutoSize(true);
    $sheet->getColumnDimension('L')->setAutoSize(true);
    $sheet->getColumnDimension('M')->setAutoSize(true);
    $sheet->getColumnDimension('N')->setAutoSize(true);

    $writer = new Xlsx($spreadsheet);
    $fileName = 'Laporan_UMKM.xlsx';

    // Redirect output to a client’s web browser (Xlsx)
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="' . $fileName . '"');
    header('Cache-Control: max-age=0');
    header('Cache-Control: max-age=1');

    $writer->save('php://output');
    exit;
}
}
