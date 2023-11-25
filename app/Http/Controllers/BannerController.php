<?php

namespace App\Http\Controllers;

// In BannerController.php

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        // Create banners
        Banner::create([
            'heading' => $request->heading,
            'description' => $request->description,
            'button_text' => $request->button_text
        ]);

        return redirect()->route('banners.index')->with('success', 'Banner created successfully.');
    }

    public function show(Banner $banner)
    {
        return view('admin.banners.show', compact('banner'));
    }

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        // Validate request
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'button_text' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update banners
        $banner->update([
            'heading' => $request->heading,
            'description' => $request->description,
            'button_text' => $request->button_text,
        ]);

        if ($request->hasFile('image')) {
            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $banner->update(['image_path' => 'images/' . $imageName]);
        }

        return redirect()->route('banners.index')->with('success', 'Banner updated successfully.');
    }

    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->route('banners.index')->with('success', 'Banner deleted successfully.');
    }
}

