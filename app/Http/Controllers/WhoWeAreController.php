<?php

namespace App\Http\Controllers;

// In WhoWeAreController.php

use App\WhoWeAre;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class WhoWeAreController extends Controller
{
    public function index()
    {
        $whoWeAres = WhoWeAre::all();
        return view('admin.who_we_ares.index', compact('whoWeAres'));
    }

    public function create()
    {
        return view('admin.who_we_ares.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'unique_record' => Rule::unique('who_we_ares'),
        ]);

        // Upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Create WhoWeAre
        WhoWeAre::create([
            'heading' => $request->heading,
            'description' => $request->description,
            'image_path' => 'images/' . $imageName,
        ]);

        return redirect()->route('who_we_ares.index')->with('success', 'WhoWeAre created successfully.');
    }

    public function show(WhoWeAre $whoWeAre)
    {
        return view('admin.who_we_ares.show', compact('whoWeAre'));
    }

    public function edit(WhoWeAre $whoWeAre)
    {
        return view('admin.who_we_ares.edit', compact('whoWeAre'));
    }

    public function update(Request $request, WhoWeAre $whoWeAre)
    {
        // Validate request
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'unique_record' => Rule::unique('who_we_ares')->ignore($whoWeAre->id),

        ]);

        // Update WhoWeAre
        $whoWeAre->update([
            'heading' => $request->heading,
            'description' => $request->description,
        ]);

        if ($request->hasFile('image')) {
            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $whoWeAre->update(['image_path' => 'images/' . $imageName]);
        }

        return redirect()->route('who_we_ares.index')->with('success', 'WhoWeAre updated successfully.');
    }

    public function destroy(WhoWeAre $whoWeAre)
    {
        $whoWeAre->delete();
        return redirect()->route('who_we_ares.index')->with('success', 'WhoWeAre deleted successfully.');
    }
}
