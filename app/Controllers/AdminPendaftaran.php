<?php

namespace App\Controllers;
use App\Models\PendaftaranModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminPendaftaran extends BaseController
{
    public function index()
    {
        $model = new PendaftaranModel();
		$data['pendaftaran'] = $model->findAll();

        // Ambil keyword dari input pencarian
        $keyword = $this->request->getVar('keyword');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('nama_lengkap', $keyword)
                  ->orLike('file_ktp', $keyword)
                  ->orLike('file_kk', $keyword)
                  ->orLike('file_nib', $keyword)
                  ->orLike('file_npwp', $keyword);
        }

        // Hitung total hasil pencarian
        $totalResults = $model->countAllResults(false);

		$model = model(PendaftaranModel::class);
        $data = [
            'pendaftaran' => $model->paginate(10),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'noResults' => ($totalResults == 0), // Cek jika tidak ada hasil
            'totalResults' => $totalResults // Kirim total hasil pencarian ke view
        ];
		return view('admin/pendaftar/data_pendaftar', $data);
    }

    public function destroy($id)
    {
        $model = new PendaftaranModel();
        $pendaftaran = $model->find($id);

        if ($pendaftaran) {
            $berkas = ['file_ktp', 'file_kk', 'file_nib', 'file_npwp'];
            foreach ($berkas as $file) {
                $filePath = 'uploads/berkas/' . $pendaftaran[$file];
                if (file_exists($filePath)) {
                    unlink($filePath);
                }
            }

            $model->delete($id);

            session()->setFlashdata('success', 'Data pendaftar berhasil dihapus');
        } else {
            session()->setFlashdata('error', 'Data pendaftar tidak ditemukan');
        }

        return redirect()->to(site_url('admin/pendaftar'));
    }
}
