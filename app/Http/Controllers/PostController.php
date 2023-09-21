<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('halo');
    }

    public function buku()
    {
        $data_buku = Buku::all()->sortBy('judul');
        $jumlah_buku = Buku::count();
        $jumlah_harga = Buku::sum('harga');
        $no = 0;
        return view('buku', compact('data_buku', 'jumlah_buku', 'jumlah_harga', 'no'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $buku = new Buku;
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }

    public function destroy($id)
    {
        $buku = Buku::find($id);
        $buku->delete();
        return redirect('/buku');
    }
    public function update($id)
    {
        $buku = Buku::find($id);
        return view('buku.update', compact('buku'));
    }


    public function updatedata(Request $request, $id)
    {
        $buku = Buku::find($id);
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();
        return redirect('/buku');
    }
}
