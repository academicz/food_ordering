@extends('Admin.Layouts.Master')
@section('title')
    Admin | Orders
@endsection
@section('contents')
    <!--Page Title-->
    <div id="page-title">
        <h1 class="page-header text-overflow">All Orders</h1>

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
        <li class="active">All orders</li>
    </ol>
    <!--End breadcrumb-->

    <!--Page content-->
    <div id="page-content">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">All Orders</h3>
                        </div>

                        <!--Block Styled Form -->
                        <!--===================================================-->


                        <div class="panel-body">@include('Public.Includes.msgBox')
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th>Sl no</th>
                                        <th>Item, Quantity</th>
                                        <th>Amount</th>
                                        <th>Delivery Address</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>{{ ($orders->currentpage()*5)+$loop->index+1-5 }}</td>
                                            <td>
                                                @foreach($order->order_details as $orderDetails)
                                                    {{ $orderDetails->food->name.' ( '.$orderDetails->food->category->category_name.' )'}}
                                                    - {{ $orderDetails->quantity }}<br>
                                                @endforeach
                                            </td>
                                            <td>
                                                @foreach($order->order_details as $orderDetails)
                                                    Rs {{ $orderDetails->food->unit_price*$orderDetails->quantity }}<br>
                                                @endforeach
                                            </td>
                                            <td>{{ $order->address.', '.$order->city.', '.$order->landmark }}</td>
                                            <td>{{ $order->user->phone }}</td>
                                            <td>@if($order->status == 1) Not Delivered @elseif($order->status==2)
                                                    Delivered @elseif($order->status==-1) Cancelled @endif</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-center">
                                {{ $orders->links() }}
                            </div>
                        </div>


                        <div class="panel-footer text-right">

                        </div>
                    </div>
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
