@extends('frontend.adminLayouts.main')

@section('admin-main-container')
<div class="card mt-3 mx-auto rounded p-4 bg-light" style="border-radius: 10px;width:90%;">
    @if (Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{Session::get('status')}}
        <button type="button" class="btn-close mt-n1 btn-danger float-right" data-bs-dismiss="alert"
            aria-label="Close">x</button>
    </div>
    @endif
    <h2>Our Service</h2>
    <span>

        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal"
            class="float-right aboutUs btn btn-primary btn-sm rounded">
            <i class='fas fa-plus'></i>
            Add
        </a>

        <!-- Add Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form action="{{ route('our_service_store') }}" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                                aria-label="Close">x</button>
                        </div>
                        <div class="modal-body">
                            {{-- {{route('add_working_benefit', $header->id)}} --}}
                            @csrf
                            <div class="mb-3">
                                <label for="image" class="form-label">Image</label>
                                <input type="text" name="image" class="form-control form-control-sm" id="image"
                                    placeholder="Enter Image URL">

                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control form-control-sm" id="title"
                                    placeholder="Enter Title">

                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control form-control-sm"
                                    placeholder="Enter Description" id="description">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">
                                <i class='fas fa-plus me-3'></i>Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </span>
    <table class="table table-dark text-center mt-3">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Profile</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Project Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody style="align-items: center;">
            @foreach ($ourCustomer as $key => $customer)
            <tr>
                <th scope="row">
                    {{$key + 1}}
                </th>
                <td>
                    <img src="{{$customer->profile}}" width="70" height="70" style="border-radius: 20px;"
                        alt="emp_image">
                </td>
                <td>{{$customer->customer_name}}</td>
                <td>{{$customer->project_name}}</td>
                <td colspan="2">
                    {{-- data-bs-toggle="modal"
                    data-bs-target="#exampleModalEdit" --}}
                    <a href="{{route('update_our_customer',$customer->id)}}"
                        class="editBenefits btn btn-primary btn-sm rounded">
                        <i class='fas fa-edit'></i>
                        Edit
                    </a>
                    <a href="{{route('delete_our_customer',$customer->id)}}"
                        class="aboutUs btn btn-danger btn-sm rounded ">
                        <i class='fas fa-trash'></i>
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection