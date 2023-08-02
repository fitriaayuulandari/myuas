<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $menu =[
            'beranda' => [
                'title'=> 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif'=> 'active',
            ],
            'asrama' => [
                'title'=> 'Asrama',
                'link' => base_url() . '/asrama',
                'icon' => 'fa-solid fa-building-columns',
                'aktif'=> '',
            ],
            'santri' => [
                'title' => 'santri',
                'link' => base_url() . '/santri',
                'icon' => 'fa-solid fa-users',
                'aktif'=>'',
            ],
            'sanksi' => [
                'title' => 'sanksi',
                'link' => base_url() . '/sanksi',
                'icon' => 'fa-solid fa-list',
                'aktif'=>'',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                            <h1 class="m-0">Beranda</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Beranda</li>
                            </ol>
                        </div>';
        $data['menu'] = $menu;
        $data['breadcrumn'] = $breadcrumb;
        $data['title_card'] = "Welcome to";
        $data['Selamat_datang'] = "Selamat Datang di Aplikasi Pelanggaran Asrama";
        return view('template/content', $data);
    }
}
