<?php

namespace App\Controllers;

Use App\Models\ArtikelModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class News extends BaseController
{
    public function detail($id)
    {
        $model = new ArtikelModel();

        $data['artikel'] = $model->getArtikelById($id);

        if (!$data['artikel']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Artikel tidak ditemukan');
        }

        return view('news/detail', $data);
    }
}
