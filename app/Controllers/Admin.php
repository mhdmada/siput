<?php

namespace App\Controllers;

class Admin extends AdminBaseController
{
    public function index()
    {
        echo view('admin/home');
    }
}
