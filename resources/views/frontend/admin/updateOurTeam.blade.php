@extends('frontend.adminLayouts.main')

@section('admin-main-container')
<div class="container card p-4 rounded mt-4 bg-light w-50" style="border-radius: 10px;">
    <form action="{{route('update_OurTeam',$member_update->id)}}" method="POST">
        {{-- {{route('update_about', $about->id)}} --}}
        @csrf
        <h2>Update Our Team</h2>
        <div class="mb-3">
            <label for="image" class="form-label">Profile Image</label>
            <input type="text" value="{{$member_update->image}}" name="image" class="form-control form-control-sm"
                id="image" placeholder="Enter Profile Image URL">

        </div>
        <div class="mb-3">
            <label for="emp_name" class="form-label">Employee Name</label>
            <input type="text" value="{{$member_update->emp_name}}" name="emp_name" class="form-control form-control-sm"
                id="emp_name" placeholder="Enter Employee Name">

        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" value="{{$member_update->role}}" name="role" class="form-control form-control-sm"
                placeholder="Enter Role" id="role">
        </div>

        <div class="mb-3">
            <label for="twitter" class="form-label">Twitter</label>
            <input type="text" value="{{$member_update->twitter}}" name="twitter" class="form-control form-control-sm"
                placeholder="Enter Twitter" id="twitter">
        </div>

        <div class="mb-3">
            <label for="facebook" class="form-label">Facebook</label>
            <input type="text" value="{{$member_update->facebook}}" name="facebook" class="form-control form-control-sm"
                placeholder="Enter Facebook" id="facebook">
        </div>

        <div class="mb-3">
            <label for="linkIn" class="form-label">LinkIn</label>
            <input type="text" value="{{$member_update->linkIn}}" name="linkIn" class="form-control form-control-sm"
                placeholder="Enter LinkIn" id="linkIn">
        </div>

        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" value="{{$member_update->instagram}}" name="instagram"
                class="form-control form-control-sm" placeholder="Enter Instagram" id="instagram">
        </div>
        <div class="mb-3">
            <label for="youtube" class="form-label">Youtube</label>
            <input type="text" value="{{$member_update->youtube}}" name="youtube" class="form-control form-control-sm"
                placeholder="Enter Youtube" id="youtube">
        </div>


        <button type="submit" class="btn btn-secondary rounded-pill">Update</button>
    </form>
</div>

@endsection