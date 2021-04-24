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
                                <h1 class="h4 text-gray-900 mb-4">Channel Category</h1>
                            </div>
                            @include('partial')
                            <form action="{{route('channel_store')}}" method="post" class="user">
                             @csrf
                                <div class="form-group">
                                    <label for="">Category Name</label>
                                    <input type="name" class="form-control"
                                    name="category_name"
                                        placeholder="Enter Channel Category...">
                                </div>
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