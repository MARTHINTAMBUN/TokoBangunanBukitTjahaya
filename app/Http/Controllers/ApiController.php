<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang;

class ApiController extends Controller
{
    //method get all product
    public function index()
    {
        $barang = Barang::all();
        return response()->json([
            'success' => true,
            'message' => 'List Data Barang',
            'data' => $barang
        ], 200);
    }

    //method get product by id
    public function show($id)
    {
        $barang = Barang::find($id);

        if($barang){
            return response()->json([
                'success' => true,
                'message' => 'Detail Data Barang',
                'data' => $barang
            ], 200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Data Barang Tidak Ditemukan',
                'data' => ''
            ], 404);
        }
    }
}
