@extends('admin.admin-master')
@section('content')
<div class="container-fluid pt-4 px-4">
  <div class="row g-4">
    <div class="col-12">
      <div class="bg-secondary rounded h-100 p-4">
          <h6 class="mb-4">Home All Post</h6>
          <div class="table-responsive">
              <table class="table">
                  <thead>
                      <tr>
                          <th scope="col">#</th>
                          <th scope="col">Slider Title</th>
                          <th scope="col">Slider Text</th>
                          <th scope="col">Slider Image</th>
                          <th scope="col">Testimonial Name</th>
                          <th scope="col">Testimonial Text</th>
                          <th scope="col">Testimonial Image</th>
                          <th scope="col" colspan="2" class="text-center">Action</th>
                      </tr>

                  </thead>
                  <tbody>
                    @foreach($homes as $home)
                      <tr>
                          <th scope="row">{{$home->id}}</th>
                          <td>{{$home->sliderTitle}}</td>
                          <td>{{$home->sliderText}}</td>
                          <td>{{$home->sliderImg}}</td>
                          <td>{{$home->testimonialName}}</td>
                          <td>{{$home->testimonialText}}</td>
                          <td>{{$home->testimonialImg}}</td>
                          <td>
                            <a href="{{route('admin.homeeditpostl',['id'=>$home->id])}}" class="btn btn-warning">
                              Edit
                            </a>
                          </td>
                          <td>
                            <a href="{{route('admin.homedeletepost',['id'=>$home->id])}}" class="btn btn-danger">
                              Delete
                            </a>
                          </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
    </div>
  </div>
</div>
@endsection