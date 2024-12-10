<?php

namespace App\Controllers;

use App\Models\GerejaModel;
use CodeIgniter\Controller;

class Gereja extends Controller
{
    protected $gerejaModel;

    public function __construct()
    {
        $this->gerejaModel = new GerejaModel();
    }

    public function index()
    {
        $data=[
            'title'=>"SIMPJ | Gereja",
            'judul'=>"Gereja",
            'subjudul' => "Data Gereja",
            'gereja' => $this->gerejaModel->findAll(),
            'activeMenu' => 'gereja'
        ];
        return view('admin/gereja/index', $data);
    }

    public function create()
    {
        return view('admin/gereja/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->gerejaModel->insert($data);
        return redirect()->to('/gereja');
    }

    public function edit($id)
    {
        $data['gereja'] = $this->gerejaModel->find($id);
        return view('admin/gereja/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->gerejaModel->update($id, $data);
        return redirect()->to('/gereja');
    }

    public function delete($id)
    {
        $this->gerejaModel->delete($id);
        return redirect()->to('/gereja');
    }
}
