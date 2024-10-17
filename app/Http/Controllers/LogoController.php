<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    public function store(Request $request)
    {
        // Validate the image
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Upload the image and store the path
        $logoPath = $request->file('logo')->store('logos', 'public');

        // Save the logo path in the database
        Logo::create(['image_path' => $logoPath]);

        return redirect()->back()->with('success', 'Logo uploaded successfully');
    }
}
