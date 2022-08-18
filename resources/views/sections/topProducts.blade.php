<section class="latest-product spad">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Latest Products</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
              @foreach($lastest as $last)
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="{{asset('uploads/'.$last->img[0])}}">
                </div>
                <div class="latest-product__item__text">
                  <h6>Crab Pool Security</h6>
                  <span>{{ $last->price }}</span>
                </div>
              </a>
              @endforeach
            </div>
            <div class="latest-prdouct__slider__item">
            @foreach($lastest as $last)
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="{{asset('uploads/'.$last->img[0])}}">
                </div>
                <div class="latest-product__item__text">
                  <h6>Crab Pool Security</h6>
                  <span>{{ $last->price }}</span>
                </div>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Top Rated Products</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
            @foreach($lastest as $last)
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="{{asset('uploads/'.$last->img[0])}}" alt="" >
                </div>
                <div class="latest-product__item__text">
                  <h6>Crab Pool Security</h6>
                  <span>{{ $last->price }}</span>
                </div>
              </a>
              @endforeach
            </div>
            <div class="latest-prdouct__slider__item">
            @foreach($lastest as $last)
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="{{asset('uploads/'.$last->img[0])}}" alt="" >
                </div>
                <div class="latest-product__item__text">
                  <h6>Crab Pool Security</h6>
                  <span>{{ $last->price }}</span>
                </div>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="latest-product__text">
          <h4>Review Products</h4>
          <div class="latest-product__slider owl-carousel">
            <div class="latest-prdouct__slider__item">
            @foreach($lastest as $last)
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="{{asset('uploads/'.$last->img[0])}}" alt="" >
                </div>
                <div class="latest-product__item__text">
                  <h6>Crab Pool Security</h6>
                  <span>{{ $last->price }}</span>
                </div>
              </a>
              @endforeach
            </div>
            <div class="latest-prdouct__slider__item">
            @foreach($lastest as $last)
              <a href="#" class="latest-product__item">
                <div class="latest-product__item__pic">
                  <img src="{{asset('uploads/'.$last->img[0])}}" alt="" >
                </div>
                <div class="latest-product__item__text">
                  <h6>Crab Pool Security</h6>
                  <span>{{ $last->price }}</span>
                </div>
              </a>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
