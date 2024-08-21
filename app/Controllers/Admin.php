<?php

namespace App\Controllers;
use App\Models\UmkmModel;
use App\Models\PelatihanModel;
use App\Models\ProductModel;
use App\Models\UserModel;

class Admin extends AdminBaseController
{
    public function index()
    {
        $umkmModel = new UmkmModel();
        $pelatihanModel = new PelatihanModel();
        $productsModel = new ProductModel();
        $usersModel = new UserModel();

        $data['totalUmkm'] = $umkmModel->countAllResults();
        $data['totalPelatihan'] = $pelatihanModel->countAllResults();
        $data['totalProducts'] = $productsModel->countAllResults();
        $data['totalUsers'] = $usersModel->countAllResults();

        return view('admin/home', $data);
    }
}
