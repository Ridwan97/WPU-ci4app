<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Home | Muhammad RIdwan',
            'tes' => ['satu', 'dua', 'tiga'],
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'tittle' => 'about me'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Tanjung Sanyang ',
                    'kota' => 'jakarta'
                ],
                [
                    'tipe' => 'kantor',
                    'alamat' => 'Cawang',
                    'kota' => 'jakarta'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
