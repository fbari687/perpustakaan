<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardMembersController extends Controller
{
    public function index()
    {
        return view('dashboard.members.index', [
            'users' => User::where('role_id', 3)->get()
        ]);
    }

    public function create()
    {
        return view('dashboard.members.create');
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
        $user = User::create($validated);

        if ($user) {
            return redirect('/dashboard/members')->with('success', 'Berhasil Menambahkan Member <b>' . $user->name . '</b>');
        } else {
            return redirect('/dashboard/members')->with('failed', 'Gagal Menambahkan Member <b>' . $user->name . '</b>');
        }
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
    public function edit(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.members.edit', [
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
            return redirect('/dashboard/members')->with('success', 'Berhasil Mengedit Member ' . $user->name);
        } else {
            return redirect('/dashboard/members')->with('failed', 'Gagal Mengedit Member ' . $user->name);
        }
    }

    public function changePassView(string $id)
    {
        $user = User::where('id', $id)->first();
        return view('dashboard.members.changePass', [
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
            return redirect('/dashboard/members')->with('success', 'Berhasil Mengubah Password ' . $user->name);
        } else {
            return redirect('/dashboard/members')->with('failed', 'Gagal Mengubah Password ' . $user->name);
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
