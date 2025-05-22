<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->wantsJson()) {
            $query = Role::query();

            return DataTables::of($query)
                ->editColumn('status', function ($item) {
                    if ($item->status === 'active') {
                        return '<div><p>Active</p></div>';
                    }
                    return '<div><p>Inactive</p></div>';
                })
                ->addColumn('action', function ($item) {
                    return view('pages.super-admin.master.master-role.action', compact($item));
                })
                ->rawColumns(['status', 'action'])
                ->tojson();
        }

        return view('pages.super-admin.master.master-role.master-role');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return (view('pages.super-admin.master.master-role.master-role-add'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|string|max:10|unique:roles,code',
            'name' => 'required|string|max:225',
            'status' => 'required|in:active,inactive',
        ]);

        Role::create([
            'code' => $validated['code'],
            'name' => $validated['name'],
            'status' => $validated['status'],

        ]);

        return redirect()->route('backend.datamaster.roles.index')->with('succes', 'Role berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
