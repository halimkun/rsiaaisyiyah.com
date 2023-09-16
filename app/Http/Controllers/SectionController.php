<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    protected $poli;

    public function __construct() {
        $this->poli = new \App\Models\Poliklinik;
    }

    public function index() {
        return view('setting-section', [
            'poli' => $this->poli->all()
        ]);
    }
}
