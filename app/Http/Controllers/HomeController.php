<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $poli;
    protected $fasil;

    public function __construct() {
        $this->poli = new \App\Models\Poliklinik;
        $this->fasil = new \App\Models\Fasilitas;
    }

    public function index()
    {
        return view('public.home', [
            'poli' => $this->poli->all(),
            'fasil' => $this->fasil->all(),
            // 'dokter' => $this->fetchDokter()
        ]);
    }

    private function fetchDokter() {
        // get data from api using guzzle
        if (!env('PUBLIC_URL') || !env('BASE_API_URL')) {
            return [];
        }

        $client = new \GuzzleHttp\Client();
        $request = $client->request('GET', env('BASE_API_URL') . '/dokter/active/get?paginate=8');
        $response = json_decode($request->getBody()->getContents(), true);

        if ($response['success']) {
            return $response['data'];
        } else {
            return [];
        }
    }
}
