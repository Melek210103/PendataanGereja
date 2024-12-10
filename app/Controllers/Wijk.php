<?php

namespace App\Controllers;

use App\Models\WijkModel;
use CodeIgniter\Controller;

class Wijk extends BaseController
{
    protected $wijkModel;

    public function __construct()
    {
        $this->wijkModel = new WijkModel();
    }

    public function index()
    {
       $data=[
        'title'=>"SIMPJ | Wijk",
        'judul'=>"Wijk",
        'subjudul' => "Data Wijk",
        'wijk' => $this->wijkModel->findAll(),
        'activeMenu'=> 'wijk' 
       ];
        return view('admin/wijk/index', $data);
    }

    public function create()
    {
        return view('wijk/create');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->wijkModel->insert($data);
        return redirect()->to('/wijk');
    }

    public function edit($id)
    {
        $data['wijk'] = $this->wijkModel->find($id);
        return view('wijk/edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $this->wijkModel->update($id, $data);
        return redirect()->to('/wijk');
    }

    public function delete($id)
    {
        $this->wijkModel->delete($id);
        return redirect()->to('/wijk');
    }
}
