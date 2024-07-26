<?php

namespace App\Controllers;

use App\Models\BerkasModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Berkas extends BaseController
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
		return view('berkas/daftar_berkas', $data);
    }

    public function create()
    {
        return view('berkas/form_upload');
    }

    public function save()
	{
		if (!$this->validate([
			'berkas' => [
				'rules' => 'uploaded[berkas]|mime_in[berkas,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/pdf]|max_size[berkas,5120]',
				'errors' => [
					'uploaded' => 'Harus Ada File yang diupload',
					'mime_in' => 'File Extension Harus Berupa doc, docx, dan pdf',
					'max_size' => 'Ukuran File Maksimal 5 MB'
				]
 
			]
		])) {
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->back()->withInput();
		}
 
		$berkas = new BerkasModel();
		$dataBerkas = $this->request->getFile('berkas');

		$fileName = $dataBerkas->getName();

		$targetPath = 'uploads/berkas/' . $fileName;
		if (file_exists($targetPath)) {
    	$fileInfo = pathinfo($fileName);
    	$baseName = $fileInfo['filename'];
    	$extension = $fileInfo['extension'];
    	$counter = 1;

    	while (file_exists('uploads/berkas/' . $baseName . '_' . $counter . '.' . $extension)) {
        	$counter++;
    	}

    	$fileName = $baseName . '_' . $counter . '.' . $extension;
		}

		$dataBerkas->move('uploads/berkas/', $fileName);

		$berkas->insert([
    		'berkas' => $fileName,
    		'keterangan' => $this->request->getPost('keterangan'),
    		'nama' => $this->request->getPost('nama')
		]);

		session()->setFlashdata('success', 'Berkas Berhasil diupload');
		return redirect()->to(site_url('berkas'));
	}
}
