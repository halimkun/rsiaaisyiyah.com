<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $poli;

    public function __construct() {
        $this->poli = new \App\Models\Poliklinik;
    }

    public function index()
    {
        return view('public.home', [
            'poli' => $this->poli->all()
        ]);
    }
}
