<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    function updateSectionTitle(Request $request) {
        $data = [
            [
                'key' => 'artikel.title',
                'value' => $request->title
            ],
            [
                'key' => 'artikel.subtitle',
                'value' => $request->subtitle
            ],
        ];

        foreach ($data as $item) {
            $section = \App\Models\Settings::where('key', $item['key'])->first();
            if (!$section) {
                \App\Models\Settings::create($item);
            } else {
                $section->update($item);
            }
        }

        return response()->json([
            'status' => 'success',
            'message' => 'Data berhasil disimpan'
        ]);
    }
}
