<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarouselController extends Controller
{
    // store
    public function store(Request $request)
    {
        $request->validate([
            // carousel_images[]
            'carousel_images' => 'required|array',
        ]);

        foreach ($request->carousel_images as $key => $image) {
            $request->validate([
                'carousel_images.' . $key => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
        }

        foreach ($request->carousel_images as $key => $image) {
            $random_file_name = time() . '_' . rand(1000, 9999) . "." . $image->extension();
            $image->move(public_path('images/carousel'), $random_file_name);
            \App\Models\CarouselImages::create([
                'image' => $random_file_name
            ]);
        }

        return redirect()->back()->with('success', 'Carousel images uploaded successfully');
    }
}
