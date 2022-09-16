@extends('frontend.adminLayouts.main')

@section('admin-main-container')
<div class="container card p-4 rounded mt-4 bg-light w-50" style="border-radius: 10px;">
    <form action="{{route('update_about',$about->id)}}" method="POST">
        {{-- {{route('update_about', $about->id)}} --}}
        @csrf
        <h2>Update About Us</h2>
        <div class="mb-3">
            @csrf
            <label for="title" class="form-label">Title</label>
            <input type="text" value="{{$about->title}}" name="title" class="form-control form-control-sm" id="title"
                placeholder="Enter Title">

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            {{-- <input type="text" value="{{$about->description}}" name="description"
                class="form-control form-control-sm" placeholder="Enter Description" id="description"> --}}
            <textarea class="form-control form-control-sm" name="description" placeholder="Enter Description"
                id="description" style="height: 120px;resize:none;">{{$about->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="satisfied_clients" class="form-label">Satisfied Clients</label>
            <input type="number" value="{{$about->satisfied_clients}}" name="satisfied_clients"
                class="form-control form-control-sm" placeholder="Enter Satisfied Clients" id="satisfied_clients">
        </div>
        <div class="mb-3">
            <label for="successful_projects" class="form-label">Successful Projects</label>
            <input type="number" value="{{$about->successful_projects}}" name="successful_projects"
                class="form-control form-control-sm" placeholder="Enter Successful Projects" id="successful_projects">
        </div>
        <div class="mb-3">
            <label for="years_of_experience" class="form-label">Years Of Experience</label>
            <input type="number" value="{{$about->years_of_experience}}" name="years_of_experience"
                class="form-control form-control-sm" placeholder="Enter Years Of Experience" id="years_of_experience">
        </div>
        <div class="mb-3">
            <label for="present_experts" class="form-label">Present Experts</label>
            <input type="number" value="{{$about->present_experts}}" name="present_experts"
                class="form-control form-control-sm" placeholder="Enter Present Experts" id="present_experts">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image URL</label>
            <input type="text" value="{{$about->image}}" name="image" class="form-control form-control-sm"
                placeholder="Enter Image URL" id="image">
        </div>


        <button type="submit" class="btn btn-secondary rounded-pill">Update</button>
    </form>
</div>

@endsection