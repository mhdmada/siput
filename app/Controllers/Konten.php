<?php

namespace App\Controllers;

use App\Models\KontenModel;
use App\Models\ArtikelModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Konten extends BaseController
{
    public function visimisi()
    {
        $model = new KontenModel();
        $data['konten'] = $model->find(1);

        return view('public/visi_misi', $data);
    }

    public function struktur()
    {
        $model = new KontenModel();
        $data['konten'] = $model->find(2);

        return view('public/struktur', $data);
    }

    public function tentang()
    {
        $model = new KontenModel();
        $data['konten'] = $model->find(3);

        return view('public/tentang', $data);
    }

    public function informasi()
    {
        $model = new ArtikelModel();

        $keyword = $this->request->getVar('keyword');
        
        if ($keyword) {
            $model->like('judul_artikel', $keyword)
                  ->orLike('foto_artikel', $keyword)
                  ->orLike('isi_artikel', $keyword)
                  ->orLike('tgl_artikel', $keyword)
                  ->orLike('author', $keyword);
        }

        $totalResults = $model->countAllResults(false);

        $data = [
            'artikel' => $model->paginate(9),
            'pager' => $model->pager,
            'keyword' => $keyword, 
            'noResults' => ($totalResults == 0), 
            'totalResults' => $totalResults
        ];

        return view('public/informasi', $data);
    }

    public function kontak()
    {
        $model = new KontenModel();
        $data['konten'] = $model->find(4);

        return view('public/kontak', $data);
    }
}