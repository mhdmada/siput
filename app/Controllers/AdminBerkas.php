<?php

namespace App\Controllers;

use App\Models\BerkasModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminBerkas extends BaseController
{
    public function index()
    {
        $berkas = new BerkasModel();
		$data['berkas'] = $berkas->findAll();

		$model = model(BerkasModel::class);
        $data = [
            'berkas' => $model->paginate(10),
            'pager' => $model->pager,
        ];
		return view('admin/berkas/daftar_berkas', $data);
    }

    public function download($id)
	{
		$berkas = new BerkasModel();
        $data = $berkas->find($id);

        if (!$data) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Berkas tidak ditemukan');
        }

        return $this->response->download('uploads/berkas/' . $data['berkas'], null);
	}

    public function destroy($id)
    {
        $berkasModel = new BerkasModel();
        $berkas = $berkasModel->find($id);

        if ($berkas) {
         $filePath = 'uploads/berkas/' . $berkas['berkas'];
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $berkasModel->delete($id);

        session()->setFlashdata('success', 'Berkas berhasil dihapus');
        } else {
        session()->setFlashdata('error', 'Berkas tidak ditemukan');
        }

        return redirect()->to(site_url('admin/berkas'));
    }
}
