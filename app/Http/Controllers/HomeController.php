<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\SocialMedia;
use App\Models\Logo;
use App\Models\Section;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $socialMediaLinks = SocialMedia::where('enabled', true)->get();
        $logo = Logo::latest()->first(); // Fetch the latest uploaded logo
        # fetch all sections
        $sections = Section::where('enabled', true)->get();

        return view('frontend.home', compact('sliders', 'socialMediaLinks', 'logo', 'sections'));
    }
}

