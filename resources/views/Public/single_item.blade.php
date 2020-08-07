@extends('Public.Layouts.Master')
@section('title')
    Home
@endsection
@section('body')
    <div class="bread-crumb">
        <img src="{{ asset('public/images/banner_top.jpg') }}" class="img-responsive" alt="banner-top"
             title="banner-top">
        <div class="container">
            <div class="matter">
                <h2>our menu</h2>
                <ul class="list-inline">
                    <li><a href="{{route('home')}}">HOME</a></li>
                    <li><a>our menu</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- shop start here -->
    <div class="shop">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-1 col-sm-offset-1 col-sm-9 col-xs-12">
                    <div class="row shopdetail">
                        <div class="col-sm-5 col-xs-12">
                            <div class="image">
                                <img src="{{ asset($item->image_path) }}" title="thumb image" alt="thumb image"
                                     class="img-responsive"/>
                            </div>
                        </div>

                        <div class="col-sm-7 col-xs-12">
                            <h2>{{ $item->name }}</h2>

                            <br>
                            <div class="price">Rs {{ $item->unit_price }}</div>
                            <p class="shortdes">{{ $item->description }}</p>
                            <div class="common">
                                <form action="{{ route('addToCart') }}">
                                    <p class="qtypara pull-left">
                                        <input type="text" name="quantity" value="1" size="2" id="input-quantity"
                                               class="form-control qty"/>
                                    </p>
                                    <div class="buttons">
                                        <button class="btn-primary">add to cart</button>
                                    </div>
                                    <input type="hidden" name="product_id" value="{{ $item->id }}">
                                </form>
                            </div>

                        </div>

                        <div class="col-sm-12 col-xs-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab-review" data-toggle="tab">Reviews ({{ $item->review->count() }})</a></li>
                                <li><a href="#tab-add" data-toggle="tab">add Review</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-review">

                                    @if($item->review->count())
                                        @foreach($item->review as $review)
                                            <div class="box">
                                                <img width="100" src="{{ asset('user.png') }}" alt="image" title="image"
                                                     class="img-responsive"/>
                                                <div class="detail">
                                                    <h2>{{ $review->user->name }}</h2>
                                                    <div>
                                                        @for($i=1;$i<=$review->star;$i++)
                                                            <i class="icofont icofont-star" style="color: yellow;"></i>
                                                        @endfor
                                                        @for($i=1;$i<=(5-$review->star);$i++)
                                                            <i class="icofont icofont-star" style="color: #ccc;"></i>
                                                        @endfor
                                                    </div>
                                                    <p>{{ $review->review }}</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @else
                                        <h3>No Review Available</h3>
                                    @endif
                                </div>
                                <div class="tab-pane" id="tab-add">
                                    @if(Auth::check())
                                        <?php $status = false; ?>
                                        @foreach($user->order as $order)
                                            @if($order->order_details->where('food_id',$item->id)->count())
                                                <?php $status = true;?>
                                            @endif
                                        @endforeach
                                        @if($status)
                                            <form class="form-horizontal" method="post"
                                                  action="{{ route('postReview') }}" id="form-review">
                                                <div class="form-group required">
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="control-label" for="input-name">Name*</label>
                                                        <input value="{{ $user->name }}" type="text" name="name"
                                                               value=""
                                                               id="input-name"
                                                               class="form-control"/>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <label class="control-label"
                                                               for="input-email">Email*</label>
                                                        <input value="{{ $user->email }}" type="text" name="email"
                                                               value=""
                                                               id="input-email"
                                                               class="form-control"/>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="col-sm-12">
                                                        <label class="control-label" for="star">Your
                                                            Star*</label>
                                                        <select name="star" id="star" class="form-control">
                                                            <option value="">Select rating star</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                        <small class="text-danger">{{ $errors->first('star') }}</small>
                                                    </div>
                                                </div>
                                                <div class="form-group required">
                                                    <div class="col-sm-12">
                                                        <label class="control-label" for="input-review">Your
                                                            Reviews*</label>
                                                        <textarea name="review" rows="5" id="input-review"
                                                                  class="form-control"></textarea>
                                                        <small class="text-danger">{{ $errors->first('review') }}</small>
                                                    </div>
                                                </div>
                                                <div class="buttons clearfix">
                                                    <button type="submit" id="button-review"
                                                            class="btn btn-primary">Submit
                                                    </button>
                                                </div>
                                                <input type="hidden" value="{{ $item->id }}" name="item">
                                                {{ csrf_field() }}
                                            </form>
                                        @else
                                            <h3>Purchase this product before writing review</h3>
                                        @endif
                                    @else
                                        <h3>Please Login To Write Review</h3>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop end here -->

@endsection