<?php

namespace App\Controllers;

use App\Models\MajelisModel;
use CodeIgniter\Controller;

class Majelis extends BaseController
{
    protected $majelisModel;

    public function __construct()
    {
        $this->majelisModel = new MajelisModel();
    }

    public function index()
    {
        $data=[
            'title'=>"SIMPJ | Majelis",
            'judul'=>"Majelis",
            'subjudul' => "Data Majelis",
            'majelis' => $this->majelisModel->findAll(),
            'activeMenu' => 'majelis'
        ];
        return view('admin/majelis/index', $data);
    }

    public function create()
    {
        return view('majelis/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->majelisModel->insert($data);
        return redirect()->to('/majelis');
    }

    public function edit($id)
    {
        $data['majelis'] = $this->majelisModel->find($id);
        return view('majelis/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->majelisModel->update($id, $data);
        return redirect()->to('/majelis');
    }

    public function delete($id)
    {
        $this->majelisModel->delete($id);
        return redirect()->to('/majelis');
    }
}
