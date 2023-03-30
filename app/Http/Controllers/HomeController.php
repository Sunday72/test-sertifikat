<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function cetak_pdf(){
        $user = [
            "nama" => "Putra Setyo",
            "sekolah" => "SMK Negeri 12 Jakarta",
            "jurusan" => "Rekayasa Perangkat Lunak",
            "tgl_selesai" => "2023-04-20"
        ];

        $pdf = Pdf::loadView('template', $user);
        $pdf->set_paper('letter', 'landscape');
        return $pdf->stream();
    }
}
