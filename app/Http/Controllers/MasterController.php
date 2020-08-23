<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MasterController extends Controller
{
    public function barang(Request $par){
        $namabarang  = $par->input('nama');
        $kategbarang = $par->input('kategori');
        return view('barang',['infoe'=>'Isi data dengan benar !','nama'=>'','kategori'=>'','paramet'=>'']);
    }

    public function barang_act(Request $par){
        $namabarang  = $par->input('nama');
        $kategbarang = $par->input('kategori');
        if($namabarang!='' AND $kategbarang!=''){
            // insert data ke table pegawai
            $insert = DB::table('barang')->insert([
                'nama' => $par->input('nama'),
                'kategori' => $par->input('kategori')
            ]);
            $select_bar = DB::table('barang')->paginate(5);

            $infonya = "Alhamdulillah input barang berhasil !";
            return view('barang_view',['infoe'=>$infonya,'paramet'=>$select_bar]);
        }
        else{
            $infonya ="Maaf nama barang dan kategori tidak boleh kosong";
            return view('barang',['infoe'=>$infonya,'nama'=>$namabarang,'kategori'=>$kategbarang]);
        }                        
    }

    public function barang_view(){        
        $select_bar = DB::table('barang')->paginate(5);
        return view('barang_view',['infoe'=>'','paramet'=>$select_bar]);        
    }
    
    public function barang_upform($idbar){        
        $select_bar = DB::table('barang')->where('idbar','=',$idbar)->get();
        //$namabarang  = $select_bar->input('nama');
        //$kategbarang = $select_bar->input('kategori');
        return view('barang_upform',['infoe'=>'Update data dengan benar !','paramet'=>$select_bar]);
    }

    public function barang_upd(Request $par){
        DB::table('barang')->where('idbar',$par->input('idbar'))->update([
            'nama' => $par->input('nama'),            
            'kategori' => $par->input('kategori')
        ]);

        $select_bar = DB::table('barang')->paginate(5);
        return view('barang_view',['infoe'=>'Sukses Update Data','paramet'=>$select_bar]);
        
    }

    public function barang_del($idbare){
        $sql_hapuse = DB::table('barang')->where('idbar',$idbare)->delete();
        if($sql_hapuse){
            $select_bar = DB::table('barang')->paginate(5);
            return view('barang_view',['infoe'=>'Sukses Hapus Data','paramet'=>$select_bar]);
        }else{
            return "Error";
        }        
        
    }
}
