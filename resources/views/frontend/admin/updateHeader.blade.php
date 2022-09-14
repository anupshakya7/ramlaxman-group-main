@extends('frontend.adminLayouts.main')

@section('admin-main-container')
<div class="container card p-4 rounded mt-4 bg-light w-50" style="border-radius: 10px;">
    <form action="{{route('update_header', $header->id)}}" method="POST">
        @csrf
        <h2>Update Header</h2>
        <div class="mb-3">
            @csrf
            <label for="title" class="form-label">Title</label>
            <input type="text" value="{{$header->title}}" name="title" class="form-control form-control-sm" id="title"
                placeholder="Enter Title">

        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" value="{{$header->description}}" name="description" class="form-control form-control-sm"
                placeholder="Enter Description" id="description">
        </div>

        <div class="mb-3">
            <label for="url" class="form-label">Video URL</label>
            <input type="text" value="{{$header->url}}" name="url" class="form-control form-control-sm"
                placeholder="Enter Video URL" id="url">
        </div>

        <button type="submit" class="btn btn-secondary rounded-pill">Update</button>
    </form>
</div>

@endsection