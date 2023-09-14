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
        $data_buku = Buku::all();
        $jumlah_buku = Buku::count();
        $jumlah_harga = Buku::sum('harga');
        return view('buku', compact('data_buku', 'jumlah_buku', 'jumlah_harga'));
    }
}
