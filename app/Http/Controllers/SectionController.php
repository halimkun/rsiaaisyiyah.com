<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    protected $poli;
    protected $fasil;

    public function __construct() {
        $this->poli = new \App\Models\Poliklinik;
        $this->fasil = new \App\Models\Fasilitas();
    }

    public function index() {
        return view('setting-section', [
            'poli' => $this->poli->all(),
            'fasil' => $this->fasil->all()
        ]);
    }
}
