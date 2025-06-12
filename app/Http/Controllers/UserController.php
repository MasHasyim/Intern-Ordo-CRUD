<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Role;
use App\Models\User;
use App\Models\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = User::with(['role', 'factory'])->select('users.*');

            return DataTables::of($query)
                ->addColumn('role', function ($user) {
                    return $user->role->name ?? '-';
                })
                ->addColumn('factory', function ($user) {
                    return $user->factory->name ?? '-';
                })
                ->editColumn('status', function ($item) {
                    return $item->status === 'active' ? 'Active' : 'Inactive';
                })
                ->addColumn('action', function ($item) {
                    return view('pages.super-admin.master.master-user.action', get_defined_vars());
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pages.super-admin.master.master-user.master-user', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        $factories = Factory::all();
        return view('pages.super-admin.master.master-user.master-user-add', compact('roles', 'factories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|max:50',
            'role_id' => 'required|exists:roles,id',
            'factory_id' => 'required|exists:factories,id',
            // 'status' => 'required|'
        ]);

        User::create([
            'name' => $validated['name'],
            'username' => $validated['username'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'role_id' => $validated['role_id'],
            'factory_id' => $validated['factory_id'],
            // 'status' => $validated['status'],
        ]);

        return redirect()->route('backend.datamaster.user.index')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('pages.super-admin.master.master-user.master-user-detail', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('pages.super-admin.master.master-user.master-user-ubah', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|max:50',
            'role_id' => 'required|exists:roles,id',
            'factory_id' => 'required|exists:factories,id',
            // 'status' => 'required|'
        ]);

        try {
            DB::beginTransaction();

            $data = [
                'name' => $validated['name'],
                'username' => $validated['username'],
                'email' => $validated['email'],
                'role_id' => $validated['role_id'],
                'factory_id' => $validated['factory_id'],
            ];

            if (!empty($validated['password'])) {
                $data['password'] = bcrypt($validated['password']);
            }

            $user->update($data);

            DB::commit();

            return redirect()->route('backend.datamaster.user.index')->with('success', 'User berhasil diperbaruhi!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbaruhi user.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        try {
            DB::beginTransaction();

            $user->delete();
            Artisan::call('cache:clear');

            DB::commit();
            return redirect()->route('backend.datamaster.user.index')->with('success', 'User berhasil dihapus!');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('backend.datamaster.user.index')->with('error', 'Gagal menghapus user: ' . $e->getMessage());
        }
    }

    public function changeStatus(User $user)
    {
        $user->status = $user->status === 'active' ? 'inactive' : 'active';
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Status berhasil diperbaruhi.',
            'new_status' => $user->status
        ]);
    }
}
