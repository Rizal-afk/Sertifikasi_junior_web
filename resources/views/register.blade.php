@extends('template.main')

@section('content')
<div class="container">
  <div class="row justify-content-center m-5">
    <div class="col-md-4 ">
      <div class="card border border-dark">
        <div class="card-header bg-white">
            <h5 class="text-center text-black" >Register</h5>
          </div>
        <div class="card-body bg-white">
          <form action="{{ url('register')}}" method="POST">
            @csrf
            <div class="form-group">
              <input type="email" id ="email" name="email" class="form-control border rounded-3" placeholder="Email" value="">
            </div><br>
            <div class="form-group">
              <input type="text" id ="username" name="username" class="form-control" placeholder="Username" value="">
            </div><br>
            <div class="form-group">
              <input type="password" id ="password" name="password" class="form-control" placeholder="Password" value="">
            </div><br>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Register</button>
            </div>
          </form>
          <hr>
          <div class="text-center">
              <a class="small" href="{{ url('login')}}">Back to Login</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection