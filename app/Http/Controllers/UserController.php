<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
            ->addColumn('role',function($user){
                return $user->role->name ?? '-';
            })
            ->addColumn('factory',function($user){
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
        return view('pages.super-admin.master.master-user.master-user');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.super-admin.master.master-user.master-user-add');
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
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|exists:roles,id',
            'factory_id' => 'required|exists:factories,id',
            // 'status' => 'required|'
        ]);

        $user = User::create([]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
