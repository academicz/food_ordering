@extends('Admin.Layouts.Master')
@section('title')
    Admin | Students
@endsection
@section('contents')
    <!--Page Title-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Food</h1>

        <!--Searchbox-->
        <div class="searchbox">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search..">
                <span class="input-group-btn">
                    <button class="text-muted" type="button"><i class="demo-pli-magnifi-glass"></i></button>
                </span>
            </div>
        </div>
        <!-- End Search Box -->

    </div>
    <!--End page title-->

    <!--Breadcrumb-->
    <ol class="breadcrumb">
        <li><a href="{{ route('adminHome') }}">Home</a></li>
        <li class="active">Food</li>
    </ol>
    <!--End breadcrumb-->

    <!--Page content-->
    <div id="page-content">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Food</h3>
                        </div>

                        <!--Block Styled Form -->
                        <!--===================================================-->
                        @include('Includes.messageBox')
                        <form action="{{route('postFoodCategory')}}" method="post">
                            {{ csrf_field() }}
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="name">Category Name</label>
                                        <input type="text" class="form-control" name="categoryName" id="name"
                                               value="{{old('name')}}">
                                        <small class="text-danger">{{ $errors->first('categoryName') }}</small>
                                    </div>
                                </div>

                            </div>
                            <div class="panel-footer text-right">
                                <button class="btn btn-success" type="submit">Submit</button>
                            </div>
                        </form>
                        <!--===================================================-->
                        <!--End Block Styled Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End page content-->
@endsection

@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@endsection
