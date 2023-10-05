<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    protected $poli;
    protected $fasil;

    public function __construct() {
        $this->poli = new \App\Models\Poliklinik;
        $this->fasil = new \App\Models\Fasilitas;
    }


    public function index()
    {
        return view('public.layanan', [
            'poli' => $this->poli->all(),
            'fasil' => $this->fasil->all()
        ]);
    }
}
