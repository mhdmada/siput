<?php

namespace App\Controllers;
use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new ArtikelModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {
        $model = new ArtikelModel();
        $data = [
            'artikel' => $model->paginate(3),
            'pager' => $model->pager,
        ];
        return view('public/index', $data);
    }

}
