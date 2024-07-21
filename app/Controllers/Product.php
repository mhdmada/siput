<?php

namespace App\Controllers;
use App\Models\ProductModel;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Product extends BaseController
{
    public function __construct()
    {
        $this->model = new ProductModel();
        $this->helpers = ['form', 'url'];

    }
    public function index()
    {
         //cara 1 dengan query builder
         $builder = $this->db->table('products');
         $query   = $builder->get();
 
         //cara 2
        //  $query = $this->db->query("SELECT * FROM products");
        $model = model(ProductModel::class);
        $data = [
            'products' => $model->paginate(5),
            'pager' => $model->pager,
        ];
 
        //  $data['pelatihan'] = $query->getResult();
         return view('product/get', $data);
    }

    public function create()
    {
        return view('product/add');
    }

    public function store()
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect('product/get');
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
            $nama_product = $this->request->getVar('nama_product');
            $nama_usaha = $this->request->getVar('nama_usaha');
            $harga_product = $this->request->getVar('harga_product');
            $alamat_usaha = $this->request->getVar('alamat_usaha');
            $no_hp = $this->request->getVar('no_hp');
            $caption = $this->request->getPost('caption');
            $image = $this->request->getFile('image');
            $filename = $image->getRandomName();
            $image->move(ROOTPATH . 'public/uploads', $filename);

            $uploadedImage = [
                'nama_product' => $nama_product,
                'nama_usaha' => $nama_usaha,
                'harga_product' => $harga_product,
                'alamat_usaha' => $alamat_usaha,
                'no_hp' => $no_hp,
                'caption' => $caption,
                'path' => $image->getName()
            ];

            $save = $this->model->save($uploadedImage);
            if ($save) {
                return redirect()->to(site_url('product'))
                    ->with('success', 'Image uploaded');
            } else {
                session()->setFlashdata('error', $this->model->errors());
                return redirect()->back();
            }

        }

        session()->setFlashdata('error', $this->validator->getErrors());
        return redirect()->back();

    }
}
