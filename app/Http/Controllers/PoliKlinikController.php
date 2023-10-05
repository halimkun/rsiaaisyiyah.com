<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliKlinikController extends Controller
{
    function store(Request $request)
    {
        // nama_poli required
        $request->validate([
            'nama_poli' => 'required|max:50',
            'shortdesc' => 'required|max:150',
            'desc' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'required|regex:/^fa-([a-z]+-?)+$/'
        ]);


        if ($request->file('gambar')) {
            $file = $file = $request->file('gambar');

            $nama_file = date("Y_m_d") . "_" . time() . "_" . $request->nama_poli . "." . $file->getClientOriginalExtension();
        }

        $data = [
            'nama_poli' => $request->nama_poli,
            'deskripsi_singkat' => $request->shortdesc,
            'deskripsi' => $request->desc,
            'gambar' => $nama_file,
            'icon' => $request->icon
        ];

        if (\App\Models\Poliklinik::create($data)) {
            $file->move('public/images', $nama_file);
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data gagal disimpan'
            ]);
        }
    }

    function update(Request $request)
    {
        // nama_poli required
        $request->validate([
            'id' => 'required',
            'nama_poli' => 'required|max:50',
            'shortdesc' => 'required|max:150',
            'desc' => 'required',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'required|regex:/^fa-([a-z]+-?)+$/'
        ]);

        $data = [
            'nama_poli' => $request->nama_poli,
            'deskripsi_singkat' => $request->shortdesc,
            'deskripsi' => $request->desc,
            'icon' => $request->icon
        ];

        if ($request->file('gambar')) {
            $file = $file = $request->file('gambar');
            $nama_file = date("Y_m_d") . "_" . time() . "_" . $request->nama_poli . "." . $file->getClientOriginalExtension();
            $data['gambar'] = $nama_file;
        }

        if (\App\Models\Poliklinik::where('id', $request->id)->update($data)) {
            if ($request->file('gambar')) {
                $file->move('public/images', $nama_file);
            }
            
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data gagal disimpan'
            ]);
        }
    }

    function updateSectionTitle(Request $request)
    {
        $data = [
            [
                'key' => 'poli.title',
                'value' => $request->title
            ],
            [
                'key' => 'poli.subtitle',
                'value' => $request->subtitle
            ],
            [
                'key' => 'poli.text',
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

    function delete(Request $request) {
        $data = \App\Models\Poliklinik::where('id', $request->id)->first();
        if ($data) {
            if (\App\Models\Poliklinik::where('id', $request->id)->delete()) {
                return response()->json([
                    'status' => 'success',
                    'message' => 'Data berhasil dihapus'
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Data gagal dihapus'
                ]);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data tidak ditemukan'
            ]);
        }
    }
}
