<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Contracts\DataTable;
use Illuminate\Console\Events\ArtisanStarting;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Role::query();

            return DataTables::of($query)
                // ->editColumn('status', function ($item) {
                //     if ($item->status === 'active') {
                //         return '<div><p>Active</p></div>';
                //     }
                //     return '<div><p>Inactive</p></div>';
                // })
                ->addColumn('status', function ($item) {
                    return $item->status === 'active' ? 'Active' : 'Inactive';
                })

                ->addColumn('action', function ($item) {
                    return view('pages.super-admin.master.master-role.action', get_defined_vars());
                })
                // ->rawColumns(['status', 'action'])
                ->toJson();
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
            // 'status' => 'required|in:active,inactive',
        ]);

        Role::create([
            'code' => $validated['code'],
            'name' => $validated['name'],
            // 'status' => $validated['status'],

        ]);

        return redirect()->route('backend.datamaster.roles.index')->with('success', 'Role berhasil ditambahkan');
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
    public function edit(Role $role)
    {

        // $role = Role::findOrFail($id);
        return view('pages.super-admin.master.master-role.master-role-ubah', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Role $role)
    {

        $validatedData = request()->validate([
            'code' => ['required', 'string', 'max:255', 'unique:roles,code,' . $role->id],
            'name' => ['required', 'string', 'max:255'],
        ]);

        // if ($role->id == 1) {
        //     return back()->with('error', 'Cannot update this role');
        // }

        try {
            DB::beginTransaction();

            $role->update($validatedData);
            // Artisan::call('cache:clear');

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            throw $e;
        }
        return redirect()->back()->with('success','kategori wewewe berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        if ($role->id == 1 || $role->id == Auth::user()->role_id) {
            return back()->with('error', 'Cannot delete this role');
        }

        try {
            DB::beginTransaction();

            $role->delete();
            Artisan::call('cache:clear');

            DB::commit();

            return redirect()->route('backend.datamaster.roles.index')->with('success', 'Role berhasil dihapus.');
        } catch (Exception $e) {
            DB::rollBack();

            return back()->with('error', 'Terjadi kesalahan saat menghapus role: ' . $e->getMessage());
        }
    }

    public function changeStatus(Role $role)
    {
        $role->status = $role->status === 'active' ? 'inactive' : 'active';
        $role->save();

        return response()->json([
            'success' => true,
            'message' => 'Status berhasil diperbaruhi.',
            'new_status' => $role->status
        ]);
    }
}
