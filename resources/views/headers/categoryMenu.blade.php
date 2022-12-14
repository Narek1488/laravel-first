<section class="hero">
  <div class="container">
    <div class="row">
			<!-- CATEGORYES -->

      <div class="col-lg-3">
        <div class="hero__categories">
          <div class="hero__categories__all">
            <i class="fa fa-bars"></i>
            <span>All departments</span>
          </div>
          <ul>
            @foreach($categoryes as $category)
            <li><a href="{{ route('dashboard/category',$category->id) }}"">{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      <div class="col-lg-9">
				<!-- SEARCH -->

        <div class="hero__search">
          <div class="hero__search__form">
            <form action="{{ route('search') }}" method="get">
              <div class="hero__search__categories">
                All Categories
                <span class="arrow_carrot-down"></span>
              </div>
              <input type="text" name="name" placeholder="What do yo u need?" />
              <button type="submit" class="site-btn">SEARCH</button>
            </form>
          </div>
          <div class="hero__search__phone">
            <div class="hero__search__phone__icon">
              <i class="fa fa-phone"></i>
            </div>
            <div class="hero__search__phone__text">
              <h5>1234567890</h5>
              <span>support 24/7 time</span>
            </div>
          </div>
        </div>
				<!-- ///////////////// -->
        <div class="hero__item set-bg" data-setbg="{{ asset('vendors/img/hero/banner.jpg') }}">
          <div class="hero__text">
            <span>FRUIT FRESH</span>
            <h2>Vegetable <br />100% Organic</h2>
            <p>Free Pickup and Delivery Available</p>
            <a href="#" class="primary-btn">SHOP NOW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>