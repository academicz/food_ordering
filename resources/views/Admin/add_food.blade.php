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
        <li class="active">Add food category</li>
    </ol>
    <!--End breadcrumb-->

    <!--Page content-->
    <div id="page-content">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Food category</h3>
                        </div>

                        <!--Block Styled Form -->
                        <!--===================================================-->
                        @include('Includes.messageBox')
                        <form action="{{route('postAddFood')}}" method="post" class="form-horizontal"
                              enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="category">Food Category</label>
                                        <select name="category" class="form-control" id="category">
                                            @foreach($categories as $category)
                                                <option @if(old('category')== $category->id){{'selected'}}@endif value="{{ $category->id }}">{{ $category->category_name }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger">{{ $errors->first('category') }}</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Food Name</label>
                                        <input type="text" class="form-control" name="name" id="name"
                                               value="{{old('name')}}">
                                        <small class="text-danger">{{ $errors->first('name') }}</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Unit Price</label>
                                        <input type="text" class="form-control" name="price" value="{{old('price')}}"
                                               id="price">
                                        <small class="text-danger">{{ $errors->first('price') }}</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Quantity per order</label>
                                        <input type="text" value="{{old('quantity')}}" class="form-control"
                                               name="quantity" id="quantity">
                                        <small class="text-danger">{{ $errors->first('quantity') }}</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Quantity per order</label>
                                        <input type="file" value="{{old('image')}}" class="form-control" name="image"
                                               id="image">
                                        <small class="text-danger">{{ $errors->first('image') }}</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" name="description"
                                                  id="description">{{old('description')}}</textarea>
                                        <small class="text-danger">{{ $errors->first('description') }}</small>
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
