<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class VerifController extends Controller
{
    public function index()
    {
        return view("dashboard.verif.index");
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'kode_peminjaman' => 'required|exists:rents,kode_peminjaman'
        ]);
        $rent = Rent::where("kode_peminjaman", $validated['kode_peminjaman'])->where('status_id', 1)->first();
        if (!$rent) {
            return redirect()->back()->with('failed', 'Not Found');
        }

        return redirect('/dashboard/verif/found')->with('found', $rent->id);
    }

    public function found(Request $request)
    {
        if (!$request->session()->get('found')) {
            return redirect('/dashboard/verif');
        }

        return view('dashboard.verif.found', [
            'rent' => Rent::where('id', $request->session()->get('found'))->where('status_id', 1)->first()
        ]);
    }

    public function verif(Request $request)
    {
        $validated = $request->validate([
            'kode_peminjaman' => 'required|exists:rents,kode_peminjaman'
        ]);

        $rent = Rent::where("kode_peminjaman", $validated['kode_peminjaman'])->where('status_id', 1)->first();
        $rent->update([
            'status_id' => 2
        ]);

        if (!$rent) {
            return redirect('/dashboard')->with('failed', 'Gagal Memverifikasi Peminjaman');
        }

        return redirect('/dashboard')->with('success', 'Berhasil Memverifikasi Peminjaman');
    }
}
