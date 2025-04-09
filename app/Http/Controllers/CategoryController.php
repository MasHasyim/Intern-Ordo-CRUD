<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|unique:categories,code',
            'name' => 'required'
        ]);
        Category::create([
            'code' => $request->code,
            'name' => $request->name,
        ]);
        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function index()
    {
        $categories = Category::all();
        return view('pages.super-admin.master.master-kategori.master-kategori', compact('categories'));
    }
}
