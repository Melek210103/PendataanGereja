<?php

namespace App\Controllers;

use App\Models\JemaatModel;
use CodeIgniter\Controller;

class Jemaat extends Controller
{
    protected $jemaatModel;

    public function __construct()
    {
        $this->jemaatModel = new JemaatModel();
    }

    public function index()
    {
        $data=[
            'title'=>"SIMPJ | Jemaat",
            'judul'=>"Jemaat",
            'subjudul' => "Data Jemaat",
            'jemaat' => $this->jemaatModel->findAll(),
            'activeMenu' => 'jemaat'
        ];
        return view('admin/jemaat/index', $data);
    }

    public function create()
    {
        return view('jemaat/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->jemaatModel->insert($data);
        return redirect()->to('/jemaat');
    }

    public function edit($id)
    {
        $data['jemaat'] = $this->jemaatModel->find($id);
        return view('jemaat/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->jemaatModel->update($id, $data);
        return redirect()->to('/jemaat');
    }

    public function delete($id)
    {
        $this->jemaatModel->delete($id);
        return redirect()->to('/jemaat');
    }
        
}
