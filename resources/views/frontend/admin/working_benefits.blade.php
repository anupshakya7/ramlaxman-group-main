@extends('frontend.adminLayouts.main')

@section('admin-main-container')
<div class="container-fluid card mt-3 mx-auto rounded p-4 bg-light w-75" style="border-radius: 10px;">
    @if (Session::get('status'))
    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
        {{Session::get('status')}}
        <button type="button" class="btn-close mt-n1 btn-danger float-right" data-bs-dismiss="alert"
            aria-label="Close">x</button>
    </div>
    @endif
    <h2>Working Benefits of Ramlaxman</h2>
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
                    <form action="{{ route('working_benefit_store') }}" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Working Benefits</h5>
                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                                aria-label="Close">x</button>
                        </div>
                        <div class="modal-body">
                            {{-- {{route('add_working_benefit', $header->id)}} --}}
                            @csrf
                            <div class="mb-3">
                                @csrf
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" class="form-control form-control-sm" id="title"
                                    placeholder="Enter Title">

                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input type="text" name="description" class="form-control form-control-sm"
                                    placeholder="Enter Description" id="description">
                            </div>

                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="text" name="icon" class="form-control form-control-sm"
                                    placeholder="Enter Icon Code" id="icon">
                            </div>

                            <div class="mb-3">
                                <label for="background_color" class="form-label">Background</label>
                                <input type="text" name="background_color" class="form-control form-control-sm"
                                    placeholder="Enter Background Color" id="background_color">
                            </div>


                            {{-- <button type="submit" class="btn btn-primary rounded-pill float-right"> <i
                                    class='fas fa-plus me-3'></i>Add</button> --}}
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
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Icons</th>
                <th scope="col">Background</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($benefit as $key => $working_benefit)
            <tr>
                <th scope="row">
                    {{$key + 1}}
                </th>
                <td>{{$working_benefit->title}}</td>
                <td>{{$working_benefit->description}}</td>
                <td>
                    @php
                    echo($working_benefit->icon)
                    @endphp
                </td>
                <td>
                    @php
                    echo($working_benefit->background_color)
                    @endphp
                </td>
                <td colspan="2">
                    {{-- data-bs-toggle="modal"
                    data-bs-target="#exampleModalEdit" --}}
                    <a href="{{route('update_benefit',$working_benefit->id)}}"
                        class="editBenefits btn btn-primary btn-sm rounded">
                        <i class='fas fa-edit'></i>
                        Edit
                    </a>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="exampleModalEdit" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <form action="" method="POST">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Working Benefits</h5>
                                        <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                                            aria-label="Close">x</button>
                                    </div>
                                    <div class="modal-body ">
                                        {{-- {{route('add_working_benefit', $header->id)}} --}}
                                        @csrf
                                        <div class="mb-3">
                                            @csrf
                                            <label for="title" class="form-label float-left text-dark">Title</label>
                                            <input type="text" name="title" class="form-control form-control-sm"
                                                id="title" placeholder="Enter Title">

                                        </div>
                                        <div class="mb-3">
                                            <label for="description"
                                                class="form-label float-left text-dark">Description</label>
                                            <input type="text" name="description" class="form-control form-control-sm"
                                                placeholder="Enter Description" id="description">
                                        </div>

                                        <div class="mb-3">
                                            <label for="icon" class="form-label float-left text-dark">Icon</label>
                                            <input type="text" name="icon" class="form-control form-control-sm"
                                                placeholder="Enter Icon Code" id="icon">
                                        </div>

                                        <div class="mb-3">
                                            <label for="background_color"
                                                class="form-label float-left text-dark">Background</label>
                                            <input type="text" name="background_color"
                                                class="form-control form-control-sm"
                                                placeholder="Enter Background Color" id="background_color">
                                        </div>


                                        {{-- <button type="submit" class="btn btn-primary rounded-pill float-right"> <i
                                                class='fas fa-plus me-3'></i>Add</button> --}}
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">
                                            <i class='fas fa-edit'></i>Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @if ($working_benefit->id != 1)
                    <a href="{{route('delete_benefits',$working_benefit->id)}}"
                        class="aboutUs btn btn-danger btn-sm rounded mt-2">
                        <i class='fas fa-trash'></i>
                        Delete
                    </a>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection