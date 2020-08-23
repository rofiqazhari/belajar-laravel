@extends('dashboard')
@section('isinya')
    <a href="{{ url('barang') }}" class="btn btn-dark">barang</a><br>       
    <font color="red">{{ $infoe }}</font>
    <form action="{{ url('/barang_upd') }}" method="post">
    {{ csrf_field() }}
    @foreach($paramet AS $b)            
    <input type="hidden" name="idbar" value="{{ $b->idbar }}">
    <div class="row mb-2">
        <div class="col-2">Nama</div>
        <div class="col-4"><input type="text" name="nama" value="{{ $b->nama }}" class="form-control" placeholder="Nama"></div>
    </div>
    <div class="row mb-2">    
        <div class="col-2">Kategori</div>
        <div class="col-4"><input type="text" name="kategori" value="{{ $b->kategori }}"class="form-control" placeholder="Kategori"></div>
    </div>        
    @endforeach
    <div class="row mb-2">
        <div class="col-6">
        <input type="submit" value="Simpan" class="btn btn-success btn-block">
        </div>
    <div>   
    </form>      
@endsection