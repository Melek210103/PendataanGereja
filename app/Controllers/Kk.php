<?php

namespace App\Controllers;

use App\Models\KkModel;
use CodeIgniter\Controller;

class Kk extends BaseController
{
    protected $kkModel;

    public function __construct()
    {
        $this->kkModel = new KkModel();
    }

    public function index()
    {
        $data=[
            'title'=>"SIMPJ | Kartu keluarga",
            'judul'=>"Kartu keluarga",
            'subjudul' => "Data Kartu Keluarga",
            'kk' => $this->kkModel->findAll(),
            'activeMenu' => 'kk'
        ];
        return view('admin/kk/index', $data);
    }

    public function create()
    {
        return view('kk/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->kkModel->insert($data);
        return redirect()->to('/kk');
    }

    public function edit($id)
    {
        $data['kk'] = $this->kkModel->find($id);
        return view('kk/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->kkModel->update($id, $data);
        return redirect()->to('/kk');
    }

    public function delete($id)
    {
        $this->kkModel->delete($id);
        return redirect()->to('/kk');
    }
}
