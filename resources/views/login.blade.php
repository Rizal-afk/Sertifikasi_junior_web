@extends('template.main')

@section('content')
<div class="container">
  @if(session()->has('success'))
  <div class="row justify-content-center m-4">
    <div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
      {{session('success')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
  </div>
  @elseif(session()->has('credentialError'))
  <div class="row justify-content-center m-4">
    <div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
      {{session('credentialError')}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
  </div>
  @endif
    <div class="row justify-content-center py-4">
      <div class="col-md-4 ">
        <div class="card border border-dark">
          <div class="card-header bg-white">
              <h5 class="text-center text-black" >Login</h5>
            </div>
          <div class="card-body bg-white border">
            <form action="{{url('login')}}" method="POST">
              @csrf
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email">
              </div><br>
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div><br>
              <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Login</button>
              </div>
            </form>
            <hr>
            <div class="text-center">
                <a class="small" href="{{ url('register')}}">Create Account</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection