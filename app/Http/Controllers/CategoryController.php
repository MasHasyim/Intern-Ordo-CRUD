<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Category;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Category::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item): string {
                    return view('pages.super-admin.master.master-kategori.action', get_defined_vars(), compact('item'))->render();
                })
                ->rawColumns(['action'])
                ->toJson();
            // ->make(true);
        }
        return view('pages.super-admin.master.master-kategori.master-kategori');
    }

    public function create() {}

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

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('pages.super-admin.master.master-kategori.master-kategori-ubah', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Category $category)
    {
        $validatedData = request()->validate([
            'code' => ['required', 'string', 'max:255', 'unique:categories,code,' . $category->id],
            'name' => ['required', 'string', 'max:255'],
        ]);

        try {
            DB::beginTransaction();
            $category->update($validatedData);
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            throw $e;
        }

        return redirect()->back()->with('success', 'Kategori berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        try {
            DB::beginTransaction();
            $category->delete();
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Kategori berhasil dihapus!',
            ], 200);
        } catch (Exception $e) {
            DB::rollback();
            return response()->json([
                'success' => false,
                'message' => 'Gagal menghapus kategori',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
