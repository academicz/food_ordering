@extends('Public.Layouts.Master')
@section('title')
    Home
@endsection
@section('body')
    @include('Public.Includes.slider')

    @include('Public.Includes.about')

    <!-- menu start here -->
    <div class="menu">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 col-xs-12 commontop text-center">
                    <h4>our menu</h4>
                    <hr>
                </div>
                <div class="col-sm-12 col-xs-12">
                    <div class="row">
                        @foreach($items as $item)
                            <a href="{{ route('showItem',['id'=>$item->id,'name'=>$item->name]) }}">
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <diV class="box single-item">
                                        <div class="image">
                                            <img src="{{ asset($item->image_path)}}" alt="image"
                                                 title="image"
                                                 class="img-responsive"/>
                                        </div>
                                        <div class="caption">
                                            <h4>{{ $item->name }}</h4>
                                            <p class="des">{{ $item->category->category_name }}</p>
                                            <div class="price">Rs {{ $item->unit_price }}
                                                <small class="quantity"> for {{$item->quantity_per_order}} </small>
                                            </div>
                                            <div class="icon text-right">
                                                <a href="#"><i class="icofont icofont-cart-alt"></i></a>
                                                <a href="#"><i class="icofont icofont-heart"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn-primary" onclick="location.href='{{route('allItems')}}'">view more
                        <i class="icofont icofont-curved-double-right"></i></button>
                </div>
            </div>
        </div>

    </div>
    <!-- gallery start here -->
    <div class="gallery">
        <div class="container">
            <div class="row ">
                <div class="col-sm-12 commontop text-center">
                    <h4>our gallery</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in
                        suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget
                        lobortis nulla.</p>
                    <hr>
                </div>
                <div class="col-sm-4 galery">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="#"><img src="{{ asset('public/images/gallery/01.jpg') }}" alt="image" title="image"
                                             class="img-responsive"/></a>
                            <div class="hoverbox">
                                <div class="show">
                                    <i class="icofont icofont-plus-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 galery">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="#"><img src="{{ asset('public/images/gallery/02.jpg') }}" alt="image" title="image"
                                             class="img-responsive"/></a>
                            <div class="hoverbox">
                                <div class="show">
                                    <i class="icofont icofont-plus-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 galery">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="#"><img src="{{ asset('public/images/gallery/03.jpg') }}" alt="image" title="image"
                                             class="img-responsive"/></a>
                            <div class="hoverbox">
                                <div class="show">
                                    <i class="icofont icofont-plus-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 galery">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="#"><img src="{{ asset('public/images/gallery/04.jpg') }}" alt="image" title="image"
                                             class="img-responsive"/></a>
                            <div class="hoverbox">
                                <div class="show">
                                    <i class="icofont icofont-plus-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 galery">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="#"><img src="{{ asset('public/images/gallery/05.jpg') }}" alt="image" title="image"
                                             class="img-responsive"/></a>
                            <div class="hoverbox">
                                <div class="show">
                                    <i class="icofont icofont-plus-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 galery">
                    <div class="product-thumb">
                        <div class="image">
                            <a href="#"><img src="{{ asset('public/images/gallery/06.jpg') }}" alt="image" title="image"
                                             class="img-responsive"/></a>
                            <div class="hoverbox">
                                <div class="show">
                                    <i class="icofont icofont-plus-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection