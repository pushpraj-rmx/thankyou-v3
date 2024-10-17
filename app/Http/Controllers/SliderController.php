<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    // Display the slider management page in the admin panel
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.manage-sliders', compact('sliders'));    
        return view('frontend.home', compact('sliders'));
    }

    // Store a new slider image and details
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_paragraph' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'button_url' => 'nullable|url',
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('sliders', 'public');

        // Save the slider with image, title, short paragraph, button text, and link
        Slider::create([
            'image_path' => $imagePath,
            'title' => $request->title,
            'short_paragraph' => $request->short_paragraph,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
        ]);

        return redirect()->back()->with('success', 'Slider image added successfully');
    }

    // Edit an existing slider
    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.edit-slider', compact('slider'));
    }

    // Update a slider image and details
    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'short_paragraph' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'button_url' => 'nullable|url',
        ]);

        // Handle image upload if a new image is provided
        $imagePath = $slider->image_path;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('sliders', 'public');
        }

        // Update the slider with new data
        $slider->update([
            'image_path' => $imagePath,
            'title' => $request->title,
            'short_paragraph' => $request->short_paragraph,
            'button_text' => $request->button_text,
            'button_url' => $request->button_url,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider updated successfully');
    }

    // Delete a slider image
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->back()->with('success', 'Slider image deleted successfully');
    }

    // just to check, delete if not needed,,,, 

    // Display the slider on the frontend
    public function show()
    {
        $sliders = Slider::all();
        return view('frontend.home', compact('sliders'));
    }
}
