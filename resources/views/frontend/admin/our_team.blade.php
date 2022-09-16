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
    <h2>Our Team</h2>
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
                    <form action="{{ route('our_team_store') }}" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
                            <button type="button" class="btn-close btn-danger" data-bs-dismiss="modal"
                                aria-label="Close">x</button>
                        </div>
                        <div class="modal-body">
                            {{-- {{route('add_working_benefit', $header->id)}} --}}
                            @csrf
                            <div class="mb-3">
                                @csrf
                                <label for="image" class="form-label">Profile Image</label>
                                <input type="text" name="image" class="form-control form-control-sm" id="image"
                                    placeholder="Enter Profile Image URL">

                            </div>
                            <div class="mb-3">
                                @csrf
                                <label for="emp_name" class="form-label">Employee Name</label>
                                <input type="text" name="emp_name" class="form-control form-control-sm" id="emp_name"
                                    placeholder="Enter Employee Name">

                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role</label>
                                <input type="text" name="role" class="form-control form-control-sm"
                                    placeholder="Enter Role" id="role">
                            </div>

                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" name="twitter" class="form-control form-control-sm"
                                    placeholder="Enter Twitter" id="twitter">
                            </div>

                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" name="facebook" class="form-control form-control-sm"
                                    placeholder="Enter Facebook" id="facebook">
                            </div>

                            <div class="mb-3">
                                <label for="linkIn" class="form-label">LinkIn</label>
                                <input type="text" name="linkIn" class="form-control form-control-sm"
                                    placeholder="Enter LinkIn" id="linkIn">
                            </div>

                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" name="instagram" class="form-control form-control-sm"
                                    placeholder="Enter Instagram" id="instagram">
                            </div>
                            <div class="mb-3">
                                <label for="youtube" class="form-label">Youtube</label>
                                <input type="text" name="youtube" class="form-control form-control-sm"
                                    placeholder="Enter Youtube" id="youtube">
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
                <th scope="col">Image</th>
                <th scope="col">Employees Name</th>
                <th scope="col">Role</th>
                <th scope="col">Twitter</th>
                <th scope="col">Facebook</th>
                <th scope="col">LinkIn</th>
                <th scope="col">Instagram</th>
                <th scope="col">Youtube</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody style="align-items: center;">
            @foreach ($our_team as $key => $team)
            <tr>
                <th scope="row">
                    {{$key + 1}}
                </th>
                <td>
                    <img src="{{$team->image}}" width="70" height="70" style="border-radius: 20px;" alt="emp_image">
                </td>
                <td>{{$team->emp_name}}</td>
                <td>{{$team->role}}</td>
                <td>{{$team->twitter}}</td>
                <td>{{$team->facebook}}</td>
                <td>{{$team->linkIn}}</td>
                <td>{{$team->instagram}}</td>
                <td>{{$team->youtube}}</td>
                <td colspan="2">
                    {{-- data-bs-toggle="modal"
                    data-bs-target="#exampleModalEdit" --}}
                    <a href="{{route('update_benefit',$team->id)}}" class="editBenefits btn btn-primary btn-sm rounded">
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
                                            <label for="emp_name" class="form-label">Employee Name</label>
                                            <input type="text" name="emp_name" class="form-control form-control-sm"
                                                id="emp_name" placeholder="Enter Employee Name">

                                        </div>
                                        <div class="mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <input type="text" name="role" class="form-control form-control-sm"
                                                placeholder="Enter Role" id="role">
                                        </div>

                                        <div class="mb-3">
                                            <label for="twitter" class="form-label">Twitter</label>
                                            <input type="text" name="twitter" class="form-control form-control-sm"
                                                placeholder="Enter Twitter" id="twitter">
                                        </div>

                                        <div class="mb-3">
                                            <label for="facebook" class="form-label">Facebook</label>
                                            <input type="text" name="facebook" class="form-control form-control-sm"
                                                placeholder="Enter Facebook" id="facebook">
                                        </div>

                                        <div class="mb-3">
                                            <label for="linkIn" class="form-label">LinkIn</label>
                                            <input type="text" name="linkIn" class="form-control form-control-sm"
                                                placeholder="Enter LinkIn" id="linkIn">
                                        </div>

                                        <div class="mb-3">
                                            <label for="instagram" class="form-label">Instagram</label>
                                            <input type="text" name="instagram" class="form-control form-control-sm"
                                                placeholder="Enter Instagram" id="instagram">
                                        </div>
                                        <div class="mb-3">
                                            <label for="youtube" class="form-label">Youtube</label>
                                            <input type="text" name="youtube" class="form-control form-control-sm"
                                                placeholder="Enter Youtube" id="youtube">
                                        </div>
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
                    <a href="{{route('delete_our_team',$team->id)}}" class="aboutUs btn btn-danger btn-sm rounded mt-2">
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