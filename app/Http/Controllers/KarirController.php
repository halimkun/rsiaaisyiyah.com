<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarirController extends Controller
{
    public function index() {
        $karir = \App\Models\Careers::all();

        return view('public.karir', compact('karir'));
    }

    public function admin() {
        $karir = \App\Models\Careers::all();
        $metrics = [
            'active' => \App\Models\Careers::where('active', 1)->count(),
            'inactive' => \App\Models\Careers::where('active', 0)->count(),
            'total' => \App\Models\Careers::count(),
        ];

        return view('karir', compact('karir', 'metrics'));
    }

    public function store(Request $request) {
        // validate input
        $request->validate([
            'posisi' => 'required',
            'description' => 'required|not_in:-',
            'type' => 'required|not_in:-',
            'education' => 'required|not_in:-',
            'major' => 'required',
            'salary_min' => 'required',
            'deadline' => 'required',
            'apply_url' => 'required|url',
        ]);

        // create data
        $data = [
            'name' => $request->posisi,
            'description' => htmlspecialchars($request->description),
            'type' => $request->type,
            'education' => $request->education,
            'major' => $request->major,
            'salary_min' => $request->salary_min,
            'deadline' => $request->deadline,
            'apply_url' => $request->apply_url,
            'active' => date('Y-m-d') < $request->deadline ? 1 : 0,
        ];

        if (\App\Models\Careers::create($data)) {
            return response()->json([
                'status' => 'success',
                'message' => 'Data berhasil disimpan'
            ]);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Data gagal disimpan',
                'error' => $data
            ]);
        }
    }


    public function update(Request $request) {
        // validate input
        $request->validate([
            'id' => 'required|exists:careers,id',
            'posisi' => 'required',
            'description' => 'required',
            'type' => 'required|not_in:-',
            'education' => 'required|not_in:-',
            'major' => 'required',
            'salary_min' => 'required',
            'deadline' => 'required',
            'apply_url' => 'required|url',
        ]);

        // create data
        $data = [
            'id' => $request->id,
            'name' => $request->posisi,
            'description' => $request->description,
            'type' => $request->type,
            'education' => $request->education,
            'major' => $request->major,
            'salary_min' => $request->salary_min,
            'deadline' => $request->deadline,
            'apply_url' => $request->apply_url,
            'active' => date('Y-m-d') < $request->deadline ? 1 : 0,
        ];

        if (\App\Models\Careers::where('id', $request->id)->update($data)) {
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

    // delete
    public function delete(Request $request)
    {
        $data = \App\Models\Careers::where('id', $request->id)->first();
        if ($data) {
            if ($data->delete()) {
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
