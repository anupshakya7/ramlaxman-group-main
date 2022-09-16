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
    <table class="table table-dark table-striped text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Section</th>
                <th scope="col" class="">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Header</td>
                <td>
                    <a href="/header" class="header btn btn-primary btn-sm rounded">
                        <i class='fas fa-edit'></i>
                        Edit
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>About Us</td>
                <td>
                    <a href="/aboutUs" class="aboutUs btn btn-primary btn-sm rounded">
                        <i class='fas fa-edit'></i>
                        Edit
                    </a>
                </td>

            </tr>
            <tr>
                <th scope="row"></th>
                <td>Why Choose Us</td>
                <td>
                    <a href="/working_benefit" class="whyChooseUs btn btn-secondary btn-sm rounded">
                        <i class='far fa-eye'></i>
                        View Details
                    </a>
                </td>

            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Our Team</td>
                <td>
                    <a href="/ourTeam" class="ourTeam btn btn-primary btn-sm rounded">
                        <i class='fas fa-edit'></i>
                        View Details
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Services</td>
                <td>
                    <a href="/aboutUs" class="aboutUs btn btn-primary btn-sm rounded">
                        <i class='fas fa-edit'></i>
                        Edit
                    </a>
                </td>

            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Our Customer</td>
                <td>
                    <a href="/ourTeam" class="ourTeam btn btn-primary btn-sm rounded">
                        <i class='fas fa-edit'></i>
                        Edit
                    </a>
                </td>
            </tr>
        </tbody>
    </table>


</div>

@endsection