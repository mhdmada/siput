<?php

namespace App\Controllers;
use App\Models\UserModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('home');
    }

    public function umkm()
    {
        return view('umkm/add');
    }

    public function pelatihan()
    {
        return view('pelatihan_dinas/persyaratan');
    }
}
