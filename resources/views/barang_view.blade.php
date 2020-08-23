@extends('dashboard')
@section('isinya')
<a href="{{ url('barang_tambah') }}" class="btn btn-dark">+ barang</a><br>
    <font color="red">{{ $infoe }}</font>    
        <h1>Data Barang</h1>
        <table class="table table-sm table-bordered table-hover table-striped">
        <tr class="thead-dark">
             <th>ID</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Act</th>     
        </tr>       
        @foreach($paramet AS $b)        
        <tr>
            <td>{{ $b->idbar }}</td>
            <td>{{ $b->nama }}</td>
            <td>{{ $b->kategori }}</td>
            <td><a href="{{ url('barang_edit',$b->idbar) }}" class="btn btn-success">Edit</a>
                <a href="{{ url('barang_hapus',$b->idbar) }}" class="btn btn-danger">Hapus</a></td>
        </tr>                
        @endforeach
        </table>
        
        {{ $paramet->links() }}
        <div class="row">
            <div class="col-lg-4">Halaman : {{ $paramet->currentPage() }}</div>
            <div class="col-lg-4">Jumlah Data : {{ $paramet->total() }}</div>
            <div class="col-lg-4">Data Per Halaman : {{ $paramet->perPage() }}</div>
        </div>
    @endsection