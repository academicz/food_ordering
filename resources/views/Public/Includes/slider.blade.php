<!-- slider start here -->
<div class="slide">
    <div class="slideshow owl-carousel">
        <div class="item">
            <img src="{{ asset('public/images/banner.jpg') }}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{ asset('public/images/banner.jpg') }}" alt="banner" title="banner" class="img-responsive"/>
        </div>
        <div class="item">
            <img src="{{ asset('public/images/banner.jpg') }}" alt="banner" title="banner" class="img-responsive"/>
        </div>
    </div>


    <!-- slide-detail start here -->
    <div class="slide-detail">
        <div class="container">
            <img src="{{ asset('public/images/logo1.png') }}" alt="logo1" title="logo1" class="img-responsive" />
            <h4>good food & good health</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
            <button type="button" class="btn-primary" onclick="location.href='{{ route('allItems') }}'">our menu</button>
        </div>
    </div>
    <!-- slide-detail end here -->
</div>
<!-- slider end here -->