<?php

namespace App\Http\Controllers;

use App\Models\Pinjaman;
use App\Models\User;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index()
    {
        $pinjaman = Pinjaman::all();
        return view('peminjaman.index', compact('pinjaman'));
    }

    public function create()
    {
        return view('pinjaman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'UserID' => 'required',
            'BukuID' => 'required',
            'TanggalPeminjaman' => 'required',
            'TanggalPengembalian' => 'required',
            'StatusPeminjaman' => 'required'
        ]);

        peminjaman::create($request->all());

        return redirect()->route('peminjaman.index')
            ->with('success', 'peminjaman berhasil ditambahkan');
    }

    public function edit(peminjaman $peminjaman)
    {
        return view('pinjaman.edit', compact('peminjaman'));
    }



    public function update(Request $request, $id)
    {
        $pinjaman = pinjaman::findOrFail($id);

        $validatedData = $request->validate([
            'UserID' => 'required',
            'BukuID' => 'required',
            'TanggalPeminjaman' => 'required',
            'TanggalPengembalian' => 'required',
            'StatusPeminjaman' => 'required'
        ]);

        $pinjaman->update($validatedData); // Menggunakan data yang telah divalidasi

        return redirect()->route('pinjaman.index')
            ->with('success', 'pinjaman berhasil diperbarui');
    }


    public function destroy(pinjaman $pinjaman, $id)
    {
        $pinjaman = pinjaman::findOrfail($id);
        $pinjaman->delete();

        return redirect()->route('pinjaman.index')
            ->with('success', 'pinjaman berhasil dihapus');
    }
}
