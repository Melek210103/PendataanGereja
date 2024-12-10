<?php

namespace App\Controllers;

use App\Models\BaptisModel;
use CodeIgniter\Controller;

class Baptis extends Controller
{
    protected $baptisModel;

    public function __construct()
    {
        $this->baptisModel = new BaptisModel();
    }

    public function index()
    {
        $data=[
            'title'=>"SIMPJ | Baptis",
            'judul'=>"Baptis",
            'subjudul' => "Data Baptis",
            'baptis' => $this->baptisModel->findAll(),
            'activeMenu' => 'baptis'
        ];
        
        return view('admin/baptis/index', $data);
    }

    public function tambah()
    {
       
    }
    
  

    public function edit($id)
    {
        $data['baptis'] = $this->baptisModel->find($id);
        return view('admin/baptis/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->baptisModel->update($id, $data);
        return redirect()->to('/baptis');
    }

    public function hapus($id)
    {
    }
}
