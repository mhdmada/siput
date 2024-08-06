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

        $keyword = $this->request->getVar('keyword');

        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('berkas', $keyword)
                  ->orLike('keterangan', $keyword)
                  ->orLike('nama', $keyword);
        }

        $totalResults = $model->countAllResults(false);

        $data = [
            'berkas' => $model->paginate(10),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'noResults' => ($totalResults == 0), // Cek jika tidak ada hasil
            'totalResults' => $totalResults // Kirim total hasil pencarian ke view
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
