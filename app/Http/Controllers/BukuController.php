<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = buku::all();
        return view('bukus.index', compact('bukus'));
    }

    public function create()
    {
        return view('bukus.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'TahunTerbit' => 'required'
        ]);

        Buku::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit(Buku $book)
    {
        return view('bukus.edit', compact('book'));
    }



    public function update(Request $request, Buku $book)
    {
        $validatedData = $request->validate([
            'Judul' => 'required',
            'Penulis' => 'required',
            'Penerbit' => 'required',
            'TahunTerbit' => 'required'
        ]);

        $book->update($validatedData);

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil diperbarui');
    }


    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('bukus.index')
            ->with('success', 'Buku berhasil dihapus');
    }
}
