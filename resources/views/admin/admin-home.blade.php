@extends('admin.admin-master')
@section('content')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-xl-12 col-xl-6">
      <form action="{{route('admin.homepost')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Home Page Data</h6>
            <h4 class="mb-4">Home Slider</h4>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="example 1" name="sTitle">
                <label for="floatingInput">Slider Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="example 1" name="sText">
                <label for="floatingInput">Slider Text</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Slider Image</label>
                <input class="form-control bg-dark" type="file" id="formFile" name="sImg">
            </div>
            <h4 class="mb-4">Home Testdimonial</h4>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="example 1" name="tTitle">
                <label for="floatingInput">Testdimonial Title</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="example 1" name="tText">
                <label for="floatingInput">Testdimonial Text</label>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Testdimonial Image</label>
                <input class="form-control bg-dark" type="file" id="formFile" name="tImg">
            </div>
            <div class="bg-secondary rounded">
                <div class="m-n2">
                    <button type="submit" class="btn btn-outline-success m-2">Add Post</button>
                </div>
            </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection