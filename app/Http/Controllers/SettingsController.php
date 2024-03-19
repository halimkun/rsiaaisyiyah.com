<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $d = \App\Models\CarouselImages::all();
        return view('settings', [
            'settings' => \App\Models\Settings::all()->keyBy('key'),
            'carousel_images' => \App\Models\CarouselImages::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'site_title' => 'required|string',
            'site_slogan' => 'required|string|max:100',
            'site_short_description' => 'required|string|max:255',
            'site_description' => 'required|string',
        ]);

        // insert request except _token
        foreach ($request->except('_token') as $key => $value) {
            \App\Models\Settings::updateOrCreate(
                ['key' => str_replace('_', '.', $key)],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Settings updated successfully');
    }
}
