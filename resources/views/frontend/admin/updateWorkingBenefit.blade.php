@extends('frontend.adminLayouts.main')

@section('admin-main-container')
<div class="container card p-4 rounded mt-4 bg-light w-50" style="border-radius: 10px;">
    <form action="{{route('update_working_benefit',$benefitEdit->id)}}" method="POST">
        {{-- {{route('update_working_benefit', $benefitEdit->id)}} --}}
        @csrf
        <h2>Update Working Benefit</h2>
        <div class="mb-3">
            @csrf
            <label for="title" class="form-label">Title</label>
            <input type="text" value="{{$benefitEdit->title}}" name="title" class="form-control form-control-sm"
                id="title" placeholder="Enter Title">

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" value="{{$benefitEdit->description}}" name="description"
                class="form-control form-control-sm" placeholder="Enter Description" id="description">
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon Code</label>
            <input type="text" value="{{$benefitEdit->icon}}" name="icon" class="form-control form-control-sm"
                placeholder="Enter Icon Code" id="icon">
        </div>

        <div class="mb-3">
            <label for="background_color" class="form-label">Background Color</label>
            <input type="text" value="{{$benefitEdit->background_color}}" name="background_color"
                class="form-control form-control-sm" placeholder="Enter Background Color" id="background_color">
        </div>

        <button type="submit" class="btn btn-secondary rounded-pill">Update</button>
    </form>
</div>

@endsection