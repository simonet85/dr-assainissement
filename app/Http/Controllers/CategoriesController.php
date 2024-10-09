<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of categories.
     */
    public function index()
    {
        // Get all categories
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     */
    public function create()
    {
        // Return the view for creating a new category
        return view('admin.categories.create');
    }

    /**
     * Store a newly created category in the database.
     */
    public function store(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|unique:categories,name|max:255',
        ]);

        // Create the new category
        $category = new Category();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name); // Create a slug from the name
        $category->save();

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Category created successfully.');
    }

    /**
     * Show the form for editing an existing category.
     */
    public function edit(Category $category)
    {
        // Return the view for editing the category
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified category in the database.
     */
    public function update(Request $request, Category $category)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id . '|max:255',
        ]);

        // Update the category
        $category->name = $request->name;
        $category->slug = Str::slug($request->name); // Update the slug if necessary
        $category->save();

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified category from the database.
     */
    public function destroy(Category $category)
    {
        // Delete the category
        $category->delete();

        // Redirect with success message
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
