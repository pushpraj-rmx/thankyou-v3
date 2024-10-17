<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductSize;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    // Show all products
    public function index()
    {
        $products = Product::with('images', 'sizes', 'category')->get();
        return view('admin.products.index', compact('products'));
    }

    // Show the form for creating a new product
    public function create()
    {
        $categories = Category::all();  // Pass categories to the view
        return view('admin.products.create', compact('categories'));
    }

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'sizes' => 'required|array',
            'prices' => 'required|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Log incoming request data for debugging
        Log::info('Incoming product data', $request->all());

        try {
            // Create product
            $product = Product::create([
                'name' => $request->name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'price' => 0,  // Or use a default price value
            ]);

            // Log success
            Log::info('Product created successfully', ['product_id' => $product->id]);

            // Save sizes and prices
            collect($request->sizes)->each(function ($size, $key) use ($product, $request) {
                $product->sizes()->create([
                    'size' => $size,
                    'price' => $request->prices[$key],
                ]);
            });

            // Save images
            collect($request->file('images'))->each(function ($image) use ($product) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/products'), $imageName); // Move to public directory
                $product->images()->create(['image' => 'images/products/' . $imageName]);  // Save relative path
            });

            return redirect()->back()->with('success', 'Product created successfully');
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error creating product', ['error' => $e->getMessage()]);

            return redirect()->back()->with('error', 'Failed to create product');
        }
    }

    // Show the form to edit a product
    public function edit($id)
    {
        $product = Product::with('images', 'sizes')->findOrFail($id);
        $categories = Category::all();  // Pass categories to the view
        return view('admin.products.edit', compact('product', 'categories'));
    }

    // Update an existing product
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,  // Update category
        ]);

        // Update sizes and prices
        $product->sizes()->delete();  // Delete old sizes
        collect($request->sizes)->each(function ($size, $key) use ($product, $request) {
            $product->sizes()->create([
                'size' => $size,
                'price' => $request->prices[$key],
            ]);
        });

        // Update images
        if ($request->hasFile('images')) {
            $oldImages = $product->images;
            collect($request->file('images'))->each(function ($image) use ($product) {
                $imageName = time() . '_' . $image->getClientOriginalName();
                $image->move(public_path('images/products'), $imageName); // Move to public directory
                $product->images()->create(['image' => 'images/products/' . $imageName]);  // Save relative path
            });

            // Delete old images from storage
            collect($oldImages)->each(function ($oldImage) {
                if (file_exists(public_path($oldImage->image))) {
                    unlink(public_path($oldImage->image));
                }
                $oldImage->delete(); // Remove old image record
            });
        }

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }
}
