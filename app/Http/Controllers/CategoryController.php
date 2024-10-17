<?php 

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

        // FRONTEND CONTROLLER METHODS

    // Display all categories on the frontend
    public function showCategories()
    {
        $categories = Category::all();  // Fetch all categories
        $commonData = getCommonData();  // Fetch common data for layout

        return view('frontend.categories', array_merge($commonData, compact('categories')));
    }

    // Display products by category on the frontend
    public function showCategoryProducts($id)
    {
        $category = Category::findOrFail($id);
        $products = $category->products;  // Assuming the relationship with products is set up
        $commonData = getCommonData();  // Fetch common data for layout

        return view('frontend.category-products', array_merge($commonData, compact('category', 'products')));
    }
    
    // ADMIN CONTROLLER METHODS

    // Show all categories in the admin panel
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', compact('categories'));
    }

    // Show form to create a category (Admin)
    public function create()
    {
        return view('admin.categories.create');
    }

    // Store a new category (Admin)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    // Show form to edit a category (Admin)
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    // Update an existing category (Admin)
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    // Delete a category (Admin)
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }


}
