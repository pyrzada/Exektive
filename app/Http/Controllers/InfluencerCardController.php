<?php

namespace App\Http\Controllers;


use App\InfluencerCard;
use Illuminate\Http\Request;

class InfluencerCardController extends Controller
{
    public function index()
    {
        $influencerCards = InfluencerCard::all();
        return view('admin.influencer_cards.index', compact('influencerCards'));
    }

    public function create()
    {
        return view('admin.influencer_cards.create');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'heading' => 'required',
            'subHeading' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Upload image
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Create InfluencerCard
        InfluencerCard::create([
            'heading' => $request->heading,
            'image_path' => 'images/' . $imageName,
            'subHeading' => $request->subHeading,
        ]);

        return redirect()->route('influencer_cards.index')->with('success', 'InfluencerCard created successfully.');
    }

    public function show(InfluencerCard $influencerCard)
    {
        return view('admin.influencer_cards.show', compact('influencerCard'));
    }

    public function edit(InfluencerCard $influencerCard)
    {
        return view('admin.influencer_cards.edit', compact('influencerCard'));
    }

    public function update(Request $request, InfluencerCard $influencerCard)
    {
        // Validate request
        $request->validate([
            'heading' => 'required',
            'subHeading' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Update InfluencerCard
        $influencerCard->update([
            'heading' => $request->heading,
            'subHeading' => $request->subHeading,

        ]);

        if ($request->hasFile('image')) {
            // Upload new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $influencerCard->update(['image_path' => 'images/' . $imageName]);
        }

        return redirect()->route('influencer_cards.index')->with('success', 'InfluencerCard updated successfully.');
    }

    public function destroy(InfluencerCard $influencerCard)
    {
        $influencerCard->delete();
        return redirect()->route('influencer_cards.index')->with('success', 'InfluencerCard deleted successfully.');
    }
}
