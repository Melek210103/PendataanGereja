<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        $data=[
            'activeMenu'=>'home',
            'title'=>"SIMPJ | Dashboard"
        ];
        $data['activeMenu'] = 'home';
        return view('admin/home',$data);
    }
}
