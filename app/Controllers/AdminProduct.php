<?php

namespace App\Controllers;
use App\Models\ProductModel;

use App\Controllers\AdminBaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminProduct extends AdminBaseController
{
    public function __construct()
    {
        $this->model = new ProductModel();
        $this->helpers = ['form', 'url'];

    }
    public function index()
    {
         //cara 1 dengan query builder
        //  $builder = $this->db->table('products');
        //  $query   = $builder->get();
 
         //cara 2
        //  $query = $this->db->query("SELECT * FROM products");
        $model = model(ProductModel::class);

        $keyword = $this->request->getVar('keyword');

        // Cek apakah ada keyword yang diinputkan
        if ($keyword) {
            $model->like('nama_product', $keyword)
                  ->orLike('nama_usaha', $keyword)
                  ->orLike('harga_product', $keyword)
                  ->orLike('alamat_usaha', $keyword)
                  ->orLike('no_hp', $keyword)
                  ->orLike('caption', $keyword)
                  ->orLike('path', $keyword);
        }

        $totalResults = $model->countAllResults(false);

        $data = [
            'products' => $model->paginate(5),
            'pager' => $model->pager,
            'keyword' => $keyword, // Tambahkan keyword ke data untuk dikirim ke view
            'noResults' => ($totalResults == 0), // Cek jika tidak ada hasil
            'totalResults' => $totalResults // Kirim total hasil pencarian ke view
        ];
 
        //  $data['product'] = $query->getResult();
         return view('admin/product/get', $data);
    }

    public function create()
    {
        return view('admin/product/add');
    }

    public function store()
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect('admin/product/get');
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
                return redirect()->to(site_url('admin/product'))
                    ->with('success', 'Data berhasil ditambahkan');
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
        $data['products'] = $this->model->find($id);

        return view('admin/product/edit', $data);
    }

    public function update($id)
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect('admin/product');
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
            $nama_product = $this->request->getVar('nama_product');
            $nama_usaha = $this->request->getVar('nama_usaha');
            $harga_product = $this->request->getVar('harga_product');
            $alamat_usaha = $this->request->getVar('alamat_usaha');
            $no_hp = $this->request->getVar('no_hp');
            $caption = $this->request->getPost('caption');
            $image = $this->request->getFile('image');

            if ($image->isValid() && !$image->hasMoved()) {
                $filename = $image->getRandomName();
                $image->move(ROOTPATH . 'public/uploads', $filename);
                $path = $image->getName();
            } else {
                $path = $this->request->getVar('old_image');
            }

            $updatedData = [
                'nama_product' => $nama_product,
                'nama_usaha' => $nama_usaha,
                'harga_product' => $harga_product,
                'alamat_usaha' => $alamat_usaha,
                'no_hp' => $no_hp,
                'caption' => $caption,
                'path' => $path
            ];

            $update = $this->model->update($id, $updatedData);
            if ($update) {
                return redirect()->to(site_url('admin/product'))
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
    // Get existing product data
    $existingProduct = $this->model->find($id);
    if ($existingProduct) {
        // Delete old image
        $oldImagePath = ROOTPATH . 'public/uploads/' . $existingProduct['path'];
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        // Delete product from database
        $delete = $this->model->delete($id);
        if ($delete) {
            return redirect()->to(site_url('admin/product'))
                ->with('success', 'Data Berhasil Dihapus');
        } else {
            session()->setFlashdata('error', 'Failed to delete product');
            return redirect()->back();
        }
        } else {
        session()->setFlashdata('error', 'Product not found');
        return redirect()->back();
        }
    }

}
