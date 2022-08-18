@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" onclick="history.back()"> Back</a>
        </div>
    </div>
</div>



<div class="slideshow-container">

    @for( $i = 0; $i < count($product->img); $i++)
        <div class="mySlides">
            <div class="numbertext"> {{ $i +  1 }} / {{ count($product->img) }}</div>
            <img src="{{ asset('uploads/'.$product->img[$i]) }}" style="width:100%">
            <div class="text">Caption Text</div>
        </div>
    @endfor


    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
    @foreach($product->img as $key=>$value)
    <span class="dot" onclick="currentSlide(<?=++$key?>)"></span>
    @endforeach
</div>

<script>
    let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].className = slides[i].className.replace("fade","");
    slides[i].style.display = "none";  
    slides[i].className += " fade";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  slides[slideIndex-1].className = slides[slideIndex-1].className.replace("fade", "");
}

</script>



<div class="card">
  <h1>{{ $product->name }}</h1>
  <p class="price">{{ $product->price }}$</p>
  <p>{{ $product->detail }}</p>
  <p><button>Add to Cart</button></p>
</div>


@endsection
<!-- <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p> -->