<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    // Display sections in the admin panel
    public function index()
    {
        $sections = Section::all();
        return view('admin.manage-sections', compact('sections'));
    }

    // Store a new section
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'button_url' => 'nullable|url',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sections', 'public');
        }

        // Save the section with optional image, button details, and enabled status
        Section::create([
            'title' => $request->title,
            'content' => $request->content,
            'image_path' => $imagePath,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'enabled' => $request->has('enabled'), // Save enabled status based on checkbox
        ]);

        return redirect()->back()->with('success', 'Section added successfully');
    }

    // Edit an existing section
    public function edit($id)
    {
        $section = Section::findOrFail($id);
        return view('admin.edit-section', compact('section'));
    }

    // Update a section
    public function update(Request $request, $id)
    {
        $section = Section::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'button_url' => 'nullable|url',
        ]);

        // Handle image upload
        $imagePath = $section->image_path;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sections', 'public');
        }

        // Update the section
        $section->update([
            'title' => $request->title,
            'content' => $request->content,
            'image_path' => $imagePath,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
            'enabled' => $request->has('enabled'), // Update enabled status
        ]);

        return redirect()->route('section.index')->with('success', 'Section updated successfully');
    }
}
