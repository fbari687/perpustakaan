<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardLibrariansController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.librarians.index', [
            'users' => User::where("role_id", 2)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.librarians.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'username' => 'required|min:2|unique:users,username',
            'email' => 'required|email|min:4',
            'telp' => 'required|numeric|min:8',
            'password' => 'required'
        ]);

        $validated['password'] = bcrypt($validated['password']);
        $validated['role_id'] = 2;
        $user = User::create($validated);

        if ($user) {
            return redirect('/dashboard/librarians')->with('success', 'Berhasil Menambahkan Pustakawan <b>' . $user->name . '</b>');
        } else {
            return redirect('/dashboard/librarians')->with('failed', 'Gagal Menambahkan Pustakawan <b>' . $user->name . '</b>');
        }
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
        $user = User::where('id', $id)->first();
        return view('dashboard.librarians.edit', [
            'user' => $user,
            'roles' => Role::where('id', '!=', 1)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();
        $rules = [
            'name' => 'required|min:2',
            'email' => 'required|email|min:4',
            'telp' => 'required|numeric|min:8',
            'role_id' => 'required|exists:roles,id'
        ];

        if ($request->input('username') != $user->username) {
            $rules['username'] = 'required|min:2|unique:users,username';
        }
        $validated = $request->validate($rules);

        $newUser = $user->update($validated);
        if ($newUser) {
            return redirect('/dashboard/librarians')->with('success', 'Berhasil Mengedit Pustakawan ' . $user->name);
        } else {
            return redirect('/dashboard/librarians')->with('failed', 'Gagal Mengedit Pustakawan ' . $user->name);
        }
    }

    public function changePassView(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.librarians.changePass', [
            'user' => $user
        ]);
    }

    public function changePass(Request $request, string $id)
    {
        $user = User::where('id', $id)->first();

        $validated = $request->validate([
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        $validated['password'] = bcrypt($validated['password']);

        $newUser = $user->update([
            'password' => $validated['password']
        ]);
        if ($newUser) {
            return redirect('/dashboard/librarians')->with('success', 'Berhasil Mengubah Password ' . $user->name);
        } else {
            return redirect('/dashboard/librarians')->with('failed', 'Gagal Mengubah Password ' . $user->name);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect('/dashboard/members')->with([
            'success' => "Berhasil Menghapus User <b>" . $user->name . "</b>"
        ]);
    }
}
