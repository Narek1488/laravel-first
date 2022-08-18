@extends('layouts.shop')

@section('content')



@include('headers.categoryMenu') 

{{-- @include('sections.categorySlider') --}}

@include('sections.products') 


<div class="banner">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img src="{{ asset('vendors/img/banner/banner-1.jpg') }}" alt="" />
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="banner__pic">
          <img src="{{ asset('vendors/img/banner/banner-2.jpg') }}" alt="" />
        </div>
      </div>
    </div>
  </div>
</div>


@include('sections.blog')
@include('sections.topProducts')
@endsection 