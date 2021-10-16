<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Harga;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $produk = DB::table('produk')->get();
        return view('index',['produk' => $produk]);
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

        Produk::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'id_kategori' => $request->id_kategori,
            'kuantitas' => $request->kuantitas

        ]);

        DB::commit();
        }catch (\Throwable $th) {
            
            //rollback jika terjadi kesalahan
            DB::rollback();
        }




        // Harga::create([
        //     'id_produk' => ->id,
        //     'harga' => $request->harga,

        // ]);


        

        // DB::commit();

        return redirect('/');
    }

}
