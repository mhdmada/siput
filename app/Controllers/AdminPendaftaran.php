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

        $keyword = $this->request->getVar('keyword');
        
        if ($keyword) {
            $model->like('nama_lengkap', $keyword)
                  ->orLike('file_ktp', $keyword)
                  ->orLike('file_kk', $keyword)
                  ->orLike('file_nib', $keyword)
                  ->orLike('file_npwp', $keyword)
                  ->orLike('status', $keyword)
                  ->orLike('kode_daftar', $keyword);
        }

        $totalResults = $model->countAllResults(false);

		$model = model(PendaftaranModel::class);
        $data = [
            'pendaftaran' => $model->paginate(10),
            'pager' => $model->pager,
            'keyword' => $keyword, 
            'noResults' => ($totalResults == 0), 
            'totalResults' => $totalResults 
        ];
		return view('admin/pendaftar/data_pendaftar', $data);
    }

    public function approve($id)
    {
        $this->db->table('pendaftaran')->update(['status' => 'disetujui'], ['id_daftar' => $id]);

        session()->setFlashdata('success', 'Data pendaftar dengan ID ' . $id . ' telah disetujui.');

        session()->set('notification', [
            'type' => 'success',
            'message' => 'Surat pendaftaran pelatihan UMKM anda disetujui. Silahkan hubungi nomor berikut untuk info lebih lanjut : 085219754647.',
            'timestamp' => time(),
            'id_daftar' => $id
        ]);

        return redirect()->to(site_url('admin/pendaftar'));
    }

    public function reject($id)
    {
        $this->db->table('pendaftaran')->update(['status' => 'ditolak'], ['id_daftar' => $id]);

        session()->setFlashdata('error', 'Data pendaftar dengan ID ' . $id . ' telah ditolak.');

        session()->set('notification', [
            'type' => 'error',
            'message' => 'Surat pendaftaran pelatihan UMKM anda ditolak. Silahkan hubungi admin atau ke nomor berikut : 085219754647.',
            'timestamp' => time(),
            'id_daftar' => $id
        ]);

        return redirect()->to(site_url('admin/pendaftar'));
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
