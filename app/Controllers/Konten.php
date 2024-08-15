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
        $data = [
            'artikel' => $model->paginate(9),
            'pager' => $model->pager,
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