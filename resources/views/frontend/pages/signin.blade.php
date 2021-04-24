@extends('frontend.pages.frontend_master')

@include('backend.layouts.css')

@section('content')
   
<div class="row justify-content-center" style="margin-top: 100px">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Sign In</h1>
                            </div>
                            @include('partial')
                            <form action="{{route('signin_action')}}" method="post" class="user">
                             @csrf
                                <div class="form-group">
                                    <input type="name" class="form-control form-control-user"
                                    name="name"
                                        placeholder="Enter Name...">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user"
                                       name="email"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                       name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user"
                                       name="con_password" placeholder="Confirm Password">
                                </div>
                                @include('partial')
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <button type="submit"  class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register.html">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
@include('backend.layouts.js')

