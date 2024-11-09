<?php

namespace App\Controllers;

class Kredit extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function hitung()
    {
        $harga = $this->request->getPost('harga');
        $dp = $this->request->getPost('dp');
        $tenor = $this->request->getPost('tenor');

        // Menghitung bunga 20%
        $bunga = 0.20 * $harga;

        // Menghitung DP dalam nominal
        $dp_nominal = ($dp / 100) * $harga;

        // Mengubah tenor ke bulan
        $tenor_bulan = $tenor * 12;

        // Menghitung jumlah angsuran
        $angsuran = (($harga + $bunga) - $dp_nominal) / $tenor_bulan;

        // Data hasil untuk ditampilkan di view
        $hasil = [
            'harga' => $harga,
            'dp' => $dp,
            'dp_nominal' => $dp_nominal,
            'tenor' => $tenor,
            'tenor_bulan' => $tenor_bulan,
            'bunga' => 20,
            'angsuran' => $angsuran
        ];

        return view('home', ['hasil' => $hasil]);
    }
}
