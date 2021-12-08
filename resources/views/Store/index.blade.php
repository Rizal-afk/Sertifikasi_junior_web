@extends('template.main')

@section('navbar')
  @include('template.partial.navbar')
@endsection

@section('content')
@if($items->isEmpty())
  <div class="row justify-content-center m-4">
    <div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
      Tidak Ditemukan Data! Harap Tambah Data Terlebih Dahulu
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
@elseif($items->isNotEmpty())
<div class="container">
  <table class="table table-bordered border-dark">
  <thead>
    <tr class="text-black text-center">
      <th scope="col">Nama_Barang</th>
      <th scope="col">Kategori</th>
      <th scope="col">Brand</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $items)
    <tr class="text-black">
      <td>{{ $items->nama_barang}}</td>
      <td>{{ $items->kategori}}</td>
      <td>{{ $items->merek}}</td>
      <td>{{ $items->deskripsi}}</td>
      <td><a class="btn btn-outline-primary" href="{{ url('show')}}" role="button">Show</a></td>
    </tr>
    @endforeach
  </tbody>
  </table>
  @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-end fixed-bottom md-2 py-4">
      <a class="btn btn-primary me-md-5" href="{{ url('create')}}" role="button">Tambah Data</a>
    </div>
@endsection