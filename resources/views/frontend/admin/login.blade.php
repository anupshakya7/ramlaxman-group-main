@extends('frontend.adminLayouts.main')

@section('admin-main-container')
<div class="container card p-4 rounded mt-4 bg-light w-50" style="border-radius: 10px;">
  <form action="admin" method="POST">
    @csrf
    <h2>Admin Login</h2>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" name="email" class="form-control form-control-sm" id="exampleInputEmail1"
        placeholder="Enter Email Address" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control form-control-sm" placeholder="Enter Password"
        id="exampleInputPassword1">
    </div>

    <button type="submit" class="btn btn-secondary rounded-pill">Submit</button>
  </form>
</div>

@endsection