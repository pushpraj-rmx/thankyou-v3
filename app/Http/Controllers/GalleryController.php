<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Fetch gallery images
        $galleryPath = public_path('gallery');
        $images = [];

        if (file_exists($galleryPath)) {
            $files = scandir($galleryPath);
            foreach ($files as $file) {
                if (in_array(pathinfo($file, PATHINFO_EXTENSION), ['jpg', 'jpeg', 'png', 'gif', 'svg'])) {
                    $images[] = 'gallery/' . $file;
                }
            }
        }

        // Merge common data and gallery images
        $data = array_merge(getCommonData(), ['images' => $images]);

        return view('frontend.gallery', $data);
    }
}
