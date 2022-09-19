@extends('frontend.adminLayouts.main')

@section('admin-main-container')
<div class="container card p-4 rounded mt-4 bg-light w-50" style="border-radius: 10px;">
    <form action="{{route('update_OurCustomer',$editCustomer->id)}}" method="POST">
        {{-- {{route('update_about', $about->id)}} --}}
        @csrf
        <h2>Update Our Customer</h2>
        <div class="mb-3">
            <label for="profile" class="form-label">Profile Image</label>
            <input type="text" value="{{$editCustomer->profile}}" name="profile" class="form-control form-control-sm"
                id="profile" placeholder="Enter Profile Image URL">

        </div>
        <div class="mb-3">
            <label for="customer_name" class="form-label">Customer Name</label>
            <input type="text" value="{{$editCustomer->customer_name}}" name="customer_name"
                class="form-control form-control-sm" id="customer_name" placeholder="Enter Customer Name">

        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" value="{{$editCustomer->project_name}}" name="project_name"
                class="form-control form-control-sm" placeholder="Enter Project Name" id="project_name">
        </div>
        <button type="submit" class="btn btn-secondary rounded-pill">Update</button>
    </form>
</div>

@endsection