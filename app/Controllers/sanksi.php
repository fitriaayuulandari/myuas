<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class sanksi extends BaseController
{
    public function index()
    {
        $menu = [
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
            'Santri' => [
                'title' => 'Santri',
                'link' => base_url() . '/Santri',
                'icon' => 'fa-solid fa-users',
                'aktif'=>'',
            ],
            'sanksi' => [
                'title' => 'Sanksi',
                'link' => base_url() . '/sanksi',
                'icon' => 'fa-solid fa-list',
                'aktif'=>'active',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">sanksi</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href ="' . base_url() . '">Beranda</a></li>
                            <li class="breadcrumb-item active">sanksi</li>
                            </ol>
                        </div>';
        $data['menu'] = $menu;
        $data['breadcrumn'] = $breadcrumb;
        return view('sanksi/content', $data);
    }
}
