<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function barang(Request $par){
        $namabarang  = $par->input('bar');
        $jenisbarang = $par->input('jen');
        return view('barang',['nmbarang'=>$namabarang,'jnbarang'=>$jenisbarang]);
    }

    public function kategori(Request $par){
        $namabarang  = $par->input('kat');
        $jenisbarang = $par->input('jen');
        return view('kategori',['katbarang'=>$namabarang,'jenbarang'=>$jenisbarang]);
    }
}
