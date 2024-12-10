<?php

namespace App\Controllers;

use App\Models\KspModel;
use CodeIgniter\Controller;

class Ksp extends BaseController
{
    protected $kspModel;

    public function __construct()
    {
        $this->kspModel = new KspModel();
    }

    public function index()
    {
        $data=[
            'title'=>"SIMPJ | Ksp",
            'judul'=>"Ksp",
            'subjudul' => "Data Ksp",
            'ksp' => $this->kspModel->findAll(),
            'activeMenu' => 'ksp'
        ];
        return view('admin/ksp/index', $data);
    }

    public function create()
    {
        return view('ksp/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->kspModel->insert($data);
        return redirect()->to('/ksp');
    }

    public function edit($id)
    {
        $data['ksp'] = $this->kspModel->find($id);
        return view('ksp/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->kspModel->update($id, $data);
        return redirect()->to('/ksp');
    }

    public function delete($id)
    {
        $this->kspModel->delete($id);
        return redirect()->to('/ksp');
    }
}
