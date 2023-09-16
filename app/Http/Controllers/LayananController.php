<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    protected $poli;

    public function __construct() {
        $this->poli = new \App\Models\Poliklinik;
    }


    public function index()
    {
        return view('public.layanan', [
            'poli' => $this->poli->all()
        ]);
    }
}
