@extends('Public.Layouts.Master')
@section('title')
    Home
@endsection
@section('body')

    <!-- bread-crumb start here -->
    <div class="bread-crumb">
        <img src="{{ asset('public/images/banner_top.jpg') }}" class="img-responsive" alt="banner-top"
             title="banner-top">
        <div class="container">
            <div class="matter">
                <h2>My Orders</h2>
                <ul class="list-inline">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="#">My Orders</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- bread-crumb end here -->

    <!-- cart start here -->
    <div class="mycart">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @include('Public.Includes.msgBox')
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>Sl no</th>
                            <th>Order Date</th>
                            <th>Item</th>
                            <th>Amount</th>
                            <th>Quantity</th>
                            {{--<th>Total</th>--}}
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ ($orders->currentpage()*5)+$loop->index+1-5 }}</td>
                                <td>{{ date('d M Y',strtotime($order->created_at)) }}</td>
                                <td>
                                    @foreach($order->order_details as $orderDetails)
                                        {{ $orderDetails->food->name.' ( '.$orderDetails->food->category->category_name.' )'}}
                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($order->order_details as $orderDetails)
                                        Rs {{ $orderDetails->food->unit_price }}
                                        <br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($order->order_details as $orderDetails)
                                        {{ $orderDetails->quantity }}
                                        <br>
                                    @endforeach
                                </td>
                                {{--<td>Rs {{ $order->quantity*$order->food->unit_price }}</td>--}}
                                <td>@if($order->status == 1) <a
                                            href="{{ route('cancelOrder',['id'=>$order->id]) }}">Cancel
                                        Order</a> @elseif($order->status==2)
                                        Delivered @elseif($order->status==-1) Cancelled @endif</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $orders->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart end here -->

@endsection