<section class="featured spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-title">
          <h2>Featured Product</h2>
        </div>
      </div>
    </div>
    <div class="row featured__filter">
      @foreach($products as $product)</a>
      <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
        <a href="{{ route('dashboard/show',$product->id) }}">
        <div class="featured__item">
          <div class="featured__item__pic set-bg">
            <img src="{{asset('uploads/'.$product->img[0])}}">
            <ul class="featured__item__pic__hover">
              <li><a href="#"><i class="fa fa-heart"></i></a></li>
              <li><a href="#"><i class="fa fa-retweet"></i></a></li>
              <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
          <div class="featured__item__text">
            <h6><a href="#">Crab Pool Security</a></h6>
            <h5>{{ $product-> price }}$</h5>
          </div>
        </div>
        </a>
      </div>
      @endforeach
    </div>
  </div>
</section>