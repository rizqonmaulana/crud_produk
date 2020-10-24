<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Produk::all();
        return view('pages.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk'=>'required',
            'keterangan'=>'required',
            'harga'=>'required|integer',
            'jumlah'=>'required|integer',
        ]);

        $post = Produk::create([
            "nama_produk" => $request["nama_produk"],
            "keterangan" => $request["keterangan"],
            "harga" => $request["harga"],
            "jumlah" => $request["jumlah"]
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Produk::find($id);
        return view('pages.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Produk::find($id);
        return view('pages.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_produk'=>'required',
            'keterangan'=>'required',
            'harga'=>'required|integer',
            'jumlah'=>'required|integer',
        ]);

        Produk::where('id', $id)->update([
            "nama_produk" => $request["nama_produk"],
            "keterangan" => $request["keterangan"],
            "harga" => $request["harga"],
            "jumlah" => $request["jumlah"]
        ]);

        return redirect('/produk')->with('success', 'Produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::destroy($id);
        return redirect('/produk')->with('success', 'Produk berhasil dihapus');
    }
}
