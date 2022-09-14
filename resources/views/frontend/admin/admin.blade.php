@extends('frontend.adminLayouts.main')

@section('admin-main-container')

<div class="container" style="border-radius: 10px;">
    @if(Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{Session::get('status')}}
        <button type="button" class="btn-close mt-n1 btn-danger" style="float: right" data-bs-dismiss="alert"
            aria-label="Close">x</button>
    </div>
    @endif
    <h2>Admin Page</h2>
    <div class="main-container" style="display: flex; flex-direction:column;">
        <a href="/header" class="header card w-25 p-4 rounded m-3">
            Header
        </a>
        <a href="#" class="about card w-25 p-4 rounded m-3">
            About Us
        </a>
        <a href="#" class="feature card w-25 p-4 rounded m-3">
            Feature
        </a>
        <a href="#" class="team card w-25 p-4 rounded m-3">
            Team
        </a>
        <a href="#" class="testimonial card w-25 p-4 rounded m-3">
            Testimonial
        </a>
        <a href="#" class="services card w-25 p-4 rounded m-3">
            Services
        </a>
        <a href="#" class="customer card w-25 p-4 rounded m-3">
            Customer
        </a>

    </div>

</div>

@endsection