<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        //
    }
    public function pelanggan(){
        return view('admin/pelanggan');
    }
    
    public function dashboard(){
        return view('admin/dashboard');
    }

    public function databuku(){
        $bookModel = model('BookModel');
        $data['books'] = $bookModel->findAll();
        return view('admin/databuku', $data);
    }

    public function transaksi(){
        return view('admin/transaksi');
    }

    public function create_buku(){
        $bookModel = model('BookModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('thumbnail_url');

        if(!$file->hasMoved()){
            $path = $file->store('images'); //writable/upload/images/nama-image
            $data['thumbnail_url'] = $path;
        }

        if($bookModel->insert($data, false)){
            return redirect()->to('admin/databuku')->with('sukses', "Data berhasil disimpan!");
        }else{
            return redirect()->back()->with('gagal', "Data gagal disimpan!");

        }
    }

    public function edit_buku($id){
        $bookModel = model ('BookModel');
        $data['buku'] = $bookModel->find($id);

        return view('admin/edit-databuku', $data);
    }

    public function update_buku(){
        $bookModel = model('BookModel');
        $data = $this->request->getPost();
        $file = $this->request->getFile('thumbnail_url');

        if($file->isValid()){
        if(!$file->hasMoved()){
            $path = $file->store('images'); //writable/upload/images/nama-image
            $data['thumbnail_url'] = $path;
        }
    }
        if($bookModel->insert($data, false)){
            return redirect()->to('admin/databuku')->with('sukses', "Data berhasil diupdate!");
        }else{
            return redirect()->back()->with('gagal', "Data gagal diupdate!");

        }
    }

        public function delete_buku($id){
            $bookModel = model('bookModel');
            if ($bookModel->delete($id)){
                return redirect()->to('admin/databuku')->with('sukses', 'Data berhasil dihapus!');
            }else{
                return redirect()->with('gagal', 'Data gagal dihapus!');
            }            
        }
}