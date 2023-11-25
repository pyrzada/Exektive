<?php

namespace App\Http\Controllers;

// In ContactUsController.php

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contactUses = ContactUs::all();
        return view('admin.contactuses.index', compact('contactUses'));
    }

    public function create()
    {
        return view('admin.contactuses.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bannerImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        // Upload image
        $imagePath = null;
        $bannerImagePath = null;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }
        if ($request->hasFile('bannerImage')) {
            $bannerImageName = time() . '.' . $request->bannerImage->extension();
            $request->bannerImage->move(public_path('images'), $bannerImageName);
            $bannerImagePath = 'images/' . $bannerImageName;
        }

        // Create ContactUs
        ContactUs::create([
            'description' => $request->description,
            'image_path' => $imagePath,
            'banner_image_path' => $bannerImagePath,
        ]);

        return redirect()->route('contactuses.index')->with('success', 'ContactUs created successfully.');
    }

    public function show($id)
    {
        $contactUs = ContactUs::find($id);
        return view('admin.contactuses.show', compact('contactUs'));
    }

    public function edit($id)
    {
        $contactUs = ContactUs::find($id);
        return view('admin.contactuses.edit', compact('contactUs'));
    }

    public function update(Request $request, $id)
    {
        $contactUs = ContactUs::find($id);

        // Validate request
        $request->validate([
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'bannerImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update ContactUs
        $imagePath = $contactUs->image_path;
        if ($request->hasFile('image')) {
            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }
        $bannerImagePath = $contactUs->banner_image_path;
        if ($request->hasFile('bannerImage')) {
            // Upload new image
            $bannerImageName = time() . '.' . $request->bannerImage->extension();
            $request->bannerImage->move(public_path('images'), $bannerImageName);
            $bannerImagePath = 'images/' . $bannerImageName;
        }
        $contactUs->update([
            'description' => $request->description,
            'image_path' => $imagePath,
            'banner_image_path' => $bannerImagePath,
        ]);

        return redirect()->route('contactuses.index')->with('success', 'ContactUs updated successfully.');
    }

    public function destroy($id)
    {
        $contactUs = ContactUs::find($id);
        $contactUs->delete();
        return redirect()->route('contactuses.index')->with('success', 'ContactUs deleted successfully.');
    }

}
