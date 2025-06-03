<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Factory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Factory::query();

            return DataTables::of($query)
                ->addColumn('action', function ($item): string {
                    return view('pages.super-admin.master.master-pabrik.action', get_defined_vars(), compact('item'))->render();
                })
                ->rawColumns(['action'])
                ->toJson();
        }
        return view('pages.super-admin.master.master-pabrik.master-pabrik');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.super-admin.master.master-pabrik.master-pabrik-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:10|unique:factories,code',
            'name' => 'required|string|max:225',
            'address' => 'required|string|max:225',
            'location' => 'required|string|max:65535',
        ]);

        Factory::create([
            'code' => $validated['code'],
            'name' => $validated['name'],
            'address' => $validated['address'],
            'location' => $validated['location'],
        ]);
        return redirect()->route('backend.datamaster.factories.index')->with('success', 'Role berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Factory $factory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Factory $factory)
    {
        return view('pages.super-admin.master.master-pabrik.master-pabrik-ubah', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factory $factory)
    {
        $validatedData = $request->validate([
            'code' => 'required|string|max:10|unique:factories,code',
            'name' => 'required|string|max:225',
            'address' => 'required|string|max:225',
            'location' => 'required|string|max:65535',
        ]);

        try {
            DB::beginTransaction();
            $factory->update($validatedData);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }

        return redirect()->back()->with('success', 'Pabrik berhasil di update!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Factory $factory)
    {
        try {
            $factory->delete();

            return response()->json([
                'message'=>'Data pabrik berhasil dihapus.'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message'=>'Gagal menghapus data.',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
