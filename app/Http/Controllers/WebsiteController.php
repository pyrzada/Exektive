<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Brand;
use App\InfluencerCard;
use App\WhoWeAre;

class WebsiteController extends Controller
{
    public function index()
    {
        $banner = Banner::all()->first();
        $who_we_are = WhoWeAre::all()->first();
        $influencer_cards = InfluencerCard::all();
        $brands = Brand::all();
        return view('welcome', compact('banner', 'who_we_are', 'influencer_cards', 'brands'));
    }
}
