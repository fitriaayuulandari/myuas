<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class santri extends BaseController
{
    public function index()
    {
        $menu =[
            'beranda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif'=>'',
            ],
            'asrama' => [
                'title' => 'Asrama',
                'link' => base_url() . '/asrama',
                'icon' => 'fa-solid fa-building-columns',
                'aktif'=>'',
            ],
            'santri' => [
                'title' => 'santri',
                'link' => base_url() . '/santri',
                'icon' => 'fa-solid fa-users',
                'aktif'=>'active',
            ],
            'sanksi' => [
                'title' => 'sanksi',
                'link' => base_url() . '/sanksi',
                'icon' => 'fa-solid fa-list',
                'aktif'=>'',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">santri</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href ="' . base_url() . '">santri</a></li>
                            <li class="breadcrumb-item active">santri</li>
                            </ol>
                        </div>';
        $data['menu'] = $menu;
        $data['breadcrumn'] = $breadcrumb;
        return view('santri/content', $data);
    }
}
