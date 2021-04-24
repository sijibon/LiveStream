
@extends('backend.pages.master')

@section('css')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">  

<!-- Custom fonts for this template -->
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template -->
<link href="{{ asset('backend/css/sb-admin-2.min.css')}}" rel="stylesheet">


@endsection

@section('admin_content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Category</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> All Category</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th> Channel Category</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th> Channel Category</th>
                                    <th>Status</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->category_name}}</td>
                                    <td>
                                        @if($category->status == 1)
                                          <span class='badge badge-success'>Active</span>
                                        @else
                                          <span class='badge badge-success'>Deactive</span>
                                        @endif
                                    </td>                                                                 
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


@section('js')

<script>
    
    <script src="{{asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{asset('backend/js/sb-admin-2.min.js')}}"></script>

    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>

</script>
@endsection

@endsection