<?php

// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
    }

    public function peserta()
    {
        return view("peserta", ["key" => "peserta"]);
    }

    public function detailpeserta()
    {
        // tetep kasih "peserta" biar menu Peserta ke-highlight
        return view("detail", ["key" => "peserta"]);
    }

    public function keluargapeserta()
    {
        // tetep kasih "peserta" biar menu Peserta ke-highlight
        return view("keluarga", ["key" => "peserta"]);
    }

    public function ahliwariskeluarga()
    {
        // tetep kasih "peserta" biar menu Peserta ke-highlight
        return view("ahliwaris", ["key" => "peserta"]);
    }

    public function formtambahkeluarga()
    {
        // tetep kasih "peserta" biar menu Peserta ke-highlight
        return view("tambahkeluarga", ["key" => "peserta"]);
    }

    public function simpankeluarga()
    {
        return redirect('/peserta/keluarga')
        ->with('success', 'Data keluarga berhasil disimpan (dummy).');
    }

    public function formubahkeluarga()
    {
        return view("ubahkeluarga",["key" => "peserta"]);
    }

    public function updatekeluarga()
    {
        return redirect('/peserta/keluarga')->with('success', 'Data keluarga berhasil diubah!');
    }

    public function formubahahliwaris()
    {
        return view("ubahahliwaris",["key" => "peserta"]);
    }

    public function updateahliwaris()
    {
        return redirect('/peserta/ahliwaris')->with('success', 'Data keluarga berhasil diubah!');
    }

    public function formtambahpeserta()
    {
        return view("tambahpeserta", ["key" => "peserta"]);
    }

    public function formubahpeserta()
    {
        return view("ubahpeserta", ["key" => "peserta"]);
    }

    // PesertaController.php
    public function index()
    {
        $breadcrumb = [
            ['label' => 'Home', 'url' => '/home'],
            ['label' => 'Peserta', 'url' => '/peserta'],
            ['label' => 'Daftar Peserta', 'url' => null] // halaman saat ini
        ];

        return view('peserta.index', compact('breadcrumb'));
    }

}

?>
