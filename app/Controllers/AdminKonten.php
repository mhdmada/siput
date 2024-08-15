<?php

namespace App\Controllers;

use App\Models\KontenModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminKonten extends BaseController
{
    public function __construct()
    {
        $this->model = new KontenModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $model = model(KontenModel::class);

        $keyword = $this->request->getVar('keyword');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('judul_konten', $keyword)
                  ->orLike('gambar_konten', $keyword)
                  ->orLike('isi_konten', $keyword)
                  ->orLike('author', $keyword);
        }

        // Hitung total hasil pencarian
        $totalResults = $model->countAllResults(false);

        $data = [
            'konten' => $model->paginate(10),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'noResults' => ($totalResults == 0), // Cek jika tidak ada hasil
            'totalResults' => $totalResults // Kirim total hasil pencarian ke view
        ];
		return view('admin/konten/get', $data);
    }

    public function create()
    {
        return view('admin/konten/add');
    }

    public function store()
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect('admin/konten/get');
        }

        $validationRule = [  
            'image' => [  
                'label' => 'Image File',  
                'rules' => 'uploaded[image]'  
                    . '|is_image[image]'  
                    . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'  
                    . '|max_size[image,1000]'  
                    . '|max_dims[image,4000,4000]',  
            ],  
        ];
        $validated = $this->validate($validationRule);

        if ($validated) {
            $judul_konten = $this->request->getVar('judul_konten');
            $isi_konten = $this->request->getVar('isi_konten');
            $image = $this->request->getFile('image');
            $filename = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/content/', $filename);

            $uploadedImage = [
                'judul_konten' => $judul_konten,
                'isi_konten' => $isi_konten,
                'author' => "Admin",
                'gambar_konten' => $image->getName()
            ];

            $save = $this->model->save($uploadedImage);
            if ($save) {
                return redirect()->to(site_url('admin/konten'))
                    ->with('success', 'Konten berhasil ditambahkan');
            } else {
                session()->setFlashdata('error', $this->model->errors());
                return redirect()->back();
            }

        }

        session()->setFlashdata('error', $this->validator->getErrors());
        return redirect()->back();
    }

    public function edit($id)
    {
        $data['konten'] = $this->model->find($id);

        return view('admin/konten/edit', $data);
    }

    public function update($id)
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect('admin/konten');
        }

        $validationRule = [  
            'image' => [  
                'label' => 'Image File',  
                'rules' => 'is_image[image]'  
                    . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'  
                    . '|max_size[image,1000]'  
                    . '|max_dims[image,4000,4000]',  
            ],  
        ];
        $validated = $this->validate($validationRule);

        if ($validated) {
            $judul_konten = $this->request->getVar('judul_konten');
            $isi_konten = $this->request->getVar('isi_konten');
            $author = $this->request->getVar('author');
            $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
                $filename = $image->getRandomName();
                $image->move(ROOTPATH . 'public/uploads/content/', $filename);
                $gambar_konten = $image->getName();
            } else {
                $gambar_konten = $this->request->getVar('old_image');
            }

            $updatedData = [
                'judul_konten' => $judul_konten,
                'isi_konten' => $isi_konten,
                'author' => $author,
                'gambar_konten' => $gambar_konten
            ];

            $update = $this->model->update($id, $updatedData);
            if ($update) {
                return redirect()->to(site_url('admin/konten'))
                    ->with('success', 'Data berhasil diupdate');
            } else {
                session()->setFlashdata('error', $this->model->errors());
                return redirect()->back();
            }

        }

        session()->setFlashdata('error', $this->validator->getErrors());
        return redirect()->back();
    }
}
