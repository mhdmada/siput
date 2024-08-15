<?php

namespace App\Controllers;

use App\Models\ArtikelModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminArtikel extends BaseController
{
    public function __construct()
    {
        $this->model = new ArtikelModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
		$model = model(ArtikelModel::class);

        $keyword = $this->request->getVar('keyword');
        
        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('judul_artikel', $keyword)
                  ->orLike('foto_artikel', $keyword)
                  ->orLike('isi_artikel', $keyword)
                  ->orLike('tgl_artikel', $keyword)
                  ->orLike('author', $keyword);
        }

        // Hitung total hasil pencarian
        $totalResults = $model->countAllResults(false);

        $data = [
            'artikel' => $model->paginate(10),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'noResults' => ($totalResults == 0), // Cek jika tidak ada hasil
            'totalResults' => $totalResults // Kirim total hasil pencarian ke view
        ];
		return view('admin/artikel/get', $data);
    }

    public function create()
    {
        return view('admin/artikel/add');
    }

    public function store()
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect('admin/artikel/get');
        }

        $validationRule = [  
            'image' => [  
                'label' => 'Image File',  
                'rules' => 'uploaded[image]'  
                    . '|is_image[image]'  
                    . '|mime_in[image,image/jpg,image/jpeg,image/gif,image/png,image/webp]'  
                    . '|max_size[image,5000]'  
                    . '|max_dims[image,4000,4000]',  
            ],  
        ];
        $validated = $this->validate($validationRule);

        if ($validated) {
            $judul_artikel = $this->request->getVar('judul_artikel');
            $isi_artikel = $this->request->getVar('isi_artikel');
            $tgl_artikel = $this->request->getVar('tgl_artikel');
            $image = $this->request->getFile('image');
            $filename = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads/news/', $filename);

            $uploadedImage = [
                'judul_artikel' => $judul_artikel,
                'isi_artikel' => $isi_artikel,
                'tgl_artikel' => $tgl_artikel,
                'author' => "Admin",
                'foto_artikel' => $image->getName()
            ];

            $save = $this->model->save($uploadedImage);
            if ($save) {
                return redirect()->to(site_url('admin/artikel'))
                    ->with('success', 'Artikel berhasil ditambahkan');
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
        $data['artikel'] = $this->model->find($id);

        return view('admin/artikel/edit', $data);
    }

    public function update($id)
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect('admin/artikel');
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
            $judul_artikel = $this->request->getVar('judul_artikel');
            $isi_artikel = $this->request->getVar('isi_artikel');
            $tgl_artikel = $this->request->getVar('tgl_artikel');
            $author = $this->request->getVar('author');
            $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
                $filename = $image->getRandomName();
                $image->move(ROOTPATH . 'public/uploads/news/', $filename);
                $foto_artikel = $image->getName();
            } else {
                $foto_artikel = $this->request->getVar('old_image');
            }

            $updatedData = [
                'judul_artikel' => $judul_artikel,
                'isi_artikel' => $isi_artikel,
                'tgl_artikel' => $tgl_artikel,
                'author' => $author,
                'foto_artikel' => $foto_artikel
            ];

            $update = $this->model->update($id, $updatedData);
            if ($update) {
                return redirect()->to(site_url('admin/artikel'))
                    ->with('success', 'Data berhasil diupdate');
            } else {
                session()->setFlashdata('error', $this->model->errors());
                return redirect()->back();
            }

        }

        session()->setFlashdata('error', $this->validator->getErrors());
        return redirect()->back();
    }

    public function destroy($id)
    {
        $existingArticle = $this->model->find($id);
        if ($existingArticle) {
            $oldImagePath = ROOTPATH . 'public/uploads/news/' . $existingArticle['foto_artikel'];
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $delete = $this->model->delete($id);
            if ($delete) {
                return redirect()->to(site_url('admin/artikel'))
                    ->with('success', 'Artikel berhasil dihapus');
            } else {
                session()->setFlashdata('error', 'Gagal menghapus artikel');
                return redirect()->back();
            }
        } else {
            session()->setFlashdata('error', 'Artikel tidak ditemukan');
            return redirect()->back();
        }
    }
}
