@extends('Admin.Layouts.Master')
@section('title')
    Admin | Home
@endsection
@section('contents')
    <!--Page content-->
    <div id="page-content">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel">

                        <div class="panel-body">@include('Public.Includes.msgBox')
<h2>WELCOME</h2>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@endsection
