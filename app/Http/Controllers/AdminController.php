<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }

    public function product()
    {
        $barang = Barang::all();
        return view('table-produk', compact('barang'));    
    }

    public function create()
    {
        return view('TambahProduk');
    }

    public function store(Request $request)
    {
        $barang = new Barang();
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->jumlah = $request->jumlah;
        if($request->hasFile('upload')){
            $file = $request->file('upload');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/barang/', $filename);
            $barang->gambar = $filename;
        }
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        Alert::success('Success', 'Product added successfully');

        return redirect()->route('admin.product')->withSuccess('Product added successfully');
    
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('EditProduk', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);
        $barang->nama = $request->nama;
        $barang->harga = $request->harga;
        $barang->jumlah = $request->jumlah;
        if($request->hasFile('upload')){
            $file = $request->file('upload');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/barang/', $filename);
            $barang->gambar = $filename;
        }
        $barang->deskripsi = $request->deskripsi;
        $barang->save();

        Alert::success('Success', 'Product updated successfully');

        return redirect()->route('admin.product')->withSuccess('Product updated successfully');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);
        $barang->delete();

        Alert::success('Success', 'Product deleted successfully');

        return redirect()->route('admin.product')->withSuccess('Product deleted successfully');
    }
}
