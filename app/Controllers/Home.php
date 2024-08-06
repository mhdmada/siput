<?php

namespace App\Controllers;
use App\Models\ArtikelModel;

class Home extends BaseController
{
    public function __construct()
    {
        $this->model = new ArtikelModel();
        $this->helpers = ['form', 'url',];
    }

    public function index()
    {
        $data['artikel'] = $this->model->findAll();
        return view('public/index', $data);
    }


}
