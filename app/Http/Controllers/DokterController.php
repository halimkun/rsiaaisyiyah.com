<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    function updateSectionTitle(Request $request) {
        $data = [
            [
                'key' => 'dokter.title',
                'value' => $request->title
            ],
            [
                'key' => 'dokter.subtitle',
                'value' => $request->subtitle
            ],
            [
                'key' => 'dokter.text',
                'value' => $request->text
            ]
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
