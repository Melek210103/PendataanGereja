<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\AnggotaModel;


class Anggota extends BaseController
{
    protected $anggotaModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }
    public function index(): string
    {
        $data=[
            'title'=>"SIMPJ | Anggota",
            'judul'=>"Anggota",
            'subjudul' => "Data Anggota",
            'anggota' => $this->anggotaModel->findAll(),
            'activeMenu' => 'anggota'
        ];
        return view('admin/anggota/index',$data);
    }
}

