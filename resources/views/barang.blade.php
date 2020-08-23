@extends('dashboard')
@section('isinya')
    <a href="{{ url('barang') }}" class="btn btn-dark">barang</a><br>
    <font color="red">{{ $infoe }}</font>
    <form action="{{ url('barang_act') }}" method="post">
    {{ csrf_field() }}
    <div class="row mb-2">
        <div class="col-2">Nama</div>
        <div class="col-4"><input type="text" name="nama" class="form-control"  value="{{ $nama }}" placeholder="Nama"></div>
    </div>
    <div class="row mb-2">   
        <div class="col-2">Kategori</div>
        <div class="col-4"><input type="text" name="kategori" class="form-control" value="{{ $kategori }}" placeholder="Kategori"></div>
    </div>    
    <div class="row mb-2">
        <div class="col-6">
        <input type="submit" value="Simpan" class="btn btn-success btn-block">
        </div>
    <div>
    </form>      
@endsection