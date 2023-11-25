<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Brand;
use App\ContactUs;
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
        $contact_us = ContactUs::all()->first();
        return view(
            'components.appContent',
            compact(
                'banner',
                'who_we_are',
                'influencer_cards',
                'brands',
                'contact_us'
            ));
    }

    public function contactUs()
    {
        $banner = Banner::all()->first();
        $who_we_are = WhoWeAre::all()->first();
        $influencer_cards = InfluencerCard::all();
        $brands = Brand::all();
        $contact_us = ContactUs::all()->first();
        return view(
            'components.contactUs',
            compact(
                'banner',
                'contact_us'
            ));
    }
}
