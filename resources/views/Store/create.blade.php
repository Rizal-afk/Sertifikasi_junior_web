@extends('template.main')

@section('content')
<div class="container">
    <div class="row justify-content-center m-5">
        <form action="{{ url('create')}}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" id ="nama_barang" name="nama_barang" class="form-control border rounded-3" placeholder="Nama Barang" value="">
              </div><br>
              <div class="form-group">
                <input type="text" id ="kategori" name="kategori" class="form-control" placeholder="Kategori" value="">
              </div><br>
              <div class="form-group">
                <input type="text" id ="merek" name="merek" class="form-control" placeholder="Brand" value="">
              </div><br>
              <div class="form-group">
                <input type="text" id ="deskripsi" name="deskripsi" class="form-control border rounded-3" placeholder="Deskripsi" value="">
              </div><br>
              <div class="mb-3">
                <label for="media" class="form-label">Default file input example</label>
                <input class="form-control" type="file" id="media" name="media" value="">
              </div>
              <button class="btn btn-outline-primary col-sm-2" type="submit">Save</button>
              <a class="btn btn-outline-warning col-sm-2" href="{{ url('/')}}" role="button">Back</a>
          </form>
    </div>
  </div>
@endsection