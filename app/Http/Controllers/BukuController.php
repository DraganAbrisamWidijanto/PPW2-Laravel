<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_buku = Buku::all()->sortBy('id');
        $no=0;
        
         // Hitung jumlah data buku
        $jumlahData = Buku::count();

        // Hitung jumlah total harga
        $totalHarga = Buku::sum('harga');

        return view('index', compact('data_buku', 'no', 'jumlahData', 'totalHarga'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bukuCreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga'=> $request->harga,
            'tgl_terbit' => $request->tgl_terbit,
        ]);
        return redirect('/buku');
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
        $buku = Buku::find($id);
        return view('bukuEdit', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Buku::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga'=> $request->harga,
            'tgl_terbit' => $request->tgl_terbit,
        ]);
        return redirect('/buku');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
}
