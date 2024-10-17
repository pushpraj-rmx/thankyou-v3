<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SocialMedia;

class SocialMediaController extends Controller
{
    // Display the social media management page
    public function index()
    {
        $socialMediaLinks = SocialMedia::all();
        return view('admin.manage-social-media', compact('socialMediaLinks'));
    }

    // Store a new social media link
    public function store(Request $request)
    {
        $request->validate([
            'platform_name' => 'required',
            'url' => 'required|url',
        ]);

        SocialMedia::create([
            'platform_name' => $request->platform_name,
            'url' => $request->url,
            'enabled' => $request->has('enabled'),
        ]);

        return redirect()->back()->with('success', 'Social media link added successfully');
    }

    // Edit an existing social media link
    public function edit($id)
    {
        $socialMediaLink = SocialMedia::findOrFail($id);
        return view('admin.edit-social-media', compact('socialMediaLink'));
    }

    // Update the social media link
    public function update(Request $request, $id)
    {
        $socialMediaLink = SocialMedia::findOrFail($id);

        $request->validate([
            'platform_name' => 'required',
            'url' => 'required|url',
        ]);

        $socialMediaLink->update([
            'platform_name' => $request->platform_name,
            'url' => $request->url,
            'enabled' => $request->has('enabled'),
        ]);

        return redirect()->route('socialMedia.index')->with('success', 'Social media link updated successfully');
    }

    // Delete a social media link
    public function destroy($id)
    {
        $socialMediaLink = SocialMedia::findOrFail($id);
        $socialMediaLink->delete();

        return redirect()->back()->with('success', 'Social media link deleted successfully');
    }
}


// Compare this snippet from resources/views/admin/manage-social-media.blade.php:

