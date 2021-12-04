<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $produk = Product::all();
        return view('produk.produkList', ['data_produk' => $produk]);
    }

    public function create()
    {
        return view('produk.produkCreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
            'penjelasan_produk' => 'required',
            'harga_produk' => 'required',
            'total_terjual' => 'required',
            'total_views' => 'required',
        ]);

        $nama_produk = $request->nama_produk;
        $kategori_produk = $request->kategori_produk;
        $penjelasan_produk = $request->penjelasan_produk;
        $harga_produk = $request->harga_produk;
        $total_terjual = $request->total_terjual;
        $total_views = $request->total_views;

        DB::beginTransaction();
        try {
            $data_insert = [
                'nama_produk' => $nama_produk,
                'kategori_produk' => $kategori_produk,
                'penjelasan_produk' => $penjelasan_produk,
                'harga_produk' => $harga_produk,
                'total_terjual' => $total_terjual,
                'total_views' => $total_views,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            Product::insert($data_insert);

            DB::commit();

            return redirect()->route('produkList');
        } catch (\Throwable $exception) {
            throw $exception;

            DB::rollBack();
        }
    }

    public function edit($id)
    {
        $produk = Product::where('id_produk', $id)->first();
        return view('produk.produkEdit', ['produk' => $produk]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
            'penjelasan_produk' => 'required',
            'harga_produk' => 'required',
            'total_terjual' => 'required',
            'total_views' => 'required',
        ]);

        $nama_produk = $request->nama_produk;
        $kategori_produk = $request->kategori_produk;
        $penjelasan_produk = $request->penjelasan_produk;
        $harga_produk = $request->harga_produk;
        $total_terjual = $request->total_terjual;
        $total_views = $request->total_views;

        $data_insert = [
            'nama_produk' => $nama_produk,
            'kategori_produk' => $kategori_produk,
            'penjelasan_produk' => $penjelasan_produk,
            'harga_produk' => $harga_produk,
            'total_terjual' => $total_terjual,
            'total_views' => $total_views,
            'updated_at' => Carbon::now(),
        ];

        Product::where('id_produk', $id)->update($data_insert);

        return redirect()->route('produkList');
    }

    public function destroy($id)
    {
        Product::where('id_produk', $id)->delete();
    }
}
