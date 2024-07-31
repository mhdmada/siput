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

		$model = model(PendaftaranModel::class);
        $data = [
            'pendaftaran' => $model->paginate(10),
            'pager' => $model->pager,
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
