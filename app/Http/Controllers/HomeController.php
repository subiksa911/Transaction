<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $film = DB::table('film')->get();
        return view('index',['film' => $film]);
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('create',['kategori' => $kategori]);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
        Kategori::create([
            'id' => $request->id_kategori,
            'nama' => $request->nama_kategori,

        ]);

        Film::crate([
            'id' => $request->id,
            'judul_film' => $request->judul_film,
            'tahun_rilis' => $request->tahun_rilis,
            'id_kategori' => $request->id_kategori,
            'produser' => $request->produser

        ]);

        DB::commit();
        }catch (\Throwable $th) {

            //rollback jika terjadi kesalahan
            DB::rollback();
        }

        return redirect('/');
    }

}