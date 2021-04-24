@extends('backend.pages.master')

@section('admin_content')

   
<div class="row justify-content-center">
    <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-sm">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Channel Manage</h1>
                            </div>
                            <form action="{{route('signin_action')}}" method="post" class="user">
                             @csrf
                                <div class="form-group">
                                    <label for="">Channel Name</label>
                                    <input type="name" class="form-control"
                                    name="name"
                                        placeholder="Enter Channel Name...">
                                </div>

                                <div class="form-group">
                                    <label for="">Channel Logo</label>
                                    <input type="file" class="form-control"
                                       name="logo">
                                </div>
                                <div class="form-group">
                                    <label for="">Channel Link</label>
                                    <input type="text" class="form-control"
                                       name="link" placeholder="Channel Link">
                                </div>
                                <div class="form-group">
                                    <label for="">Channel Description</label>
                                    <textarea name="" id="" class="form-control" cols="30" rows="3"></textarea>
                                   
                                </div>
                                @include('partial')

                                <button type="submit"  class="btn btn-primary">
                                    Submit
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection