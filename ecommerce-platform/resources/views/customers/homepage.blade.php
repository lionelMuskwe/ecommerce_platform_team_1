@extends("../General/master")

@section("title")
Home
@endsection()

@section("links")

  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/customer-homepage.css')}}">
  <script defer src="{{asset('js/homepage.js')}}"></script>
@endsection
@section("content")

  <!-- Marquee section -->

  <div class="marquee-section">
    <div class="col-sm-12">
      <p class="marquee">
        <span> “The more that you read, the more things you will know. The more that you learn, the more places you'll go.” - Dr Seuss </span>
      </p>
    </div>
  </div>

  <!-- Cover image section -->

  <div class="cover-image-section">
    <div class="cover-image-container">
      <img src="{{ asset('images/cover.jpg') }}" alt="Readers Republic Cover Image" class="cover-image">
    </div>
  </div>

  <!-- Best Sellers section -->

  <section class="best-sellers-section">
    <h2 class="best-sellers-heading">Best Sellers</h2>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    @foreach ($products->chunk(3) as $index => $product_chunk)
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
    @endforeach
  </ol>

  <div class="carousel-inner" style="height: 800px">
    @foreach ($products->chunk(3) as $index => $product_chunk)
      <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
        <div class="d-flex row col-sm-12 products-container">
          @foreach ($product_chunk as $i => $product)
            <a href="{{ route('product.detail', ['id' => $product['id']]) }}" class="col-md-4 col-sm-6">
              <div class="product-card">
                <div class="product-overlay">
                  <span class="overlay-hash">#</span><span class="overlay-number">{{ $index * 3 + $i + 1 }}</span>
                </div>
                <img src="{{ asset('images') }}/{{ $product->image }}" class="product-image">
                <div class="product-info">
                  <h3 class="product-title">{{ $product['title'] }}</h3>
                  <h4 class="product-author">{{ $product['author'] }}</h4>
                  <p class="product-price">${{ $product['price'] }}</p>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    @endforeach
  </div>

  </section>

 <!-- Video and promotion section -->
 
<div class="row video-promotion-section">
  <div class="col-md-4">
    <div class="portrait-card">
      <video width="100%" height="100%" controls>
        <source src="{{ asset('videos/my-video.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    </div>
  </div>
  <div class="col-md-8">
    <div class="promotion-container">
      <div class="promotion-two">
        <span>Buy TWO BOOKS</span>
        <p>Add books to basket and discount will be applied automatically.</p>
      </div>
      <div class="promotion-one">
        <span>Get ONE BOOK for FREE</span>
        <p>Add books to basket and discount will be applied automatically.</p>
      </div>
    </div>
  </div>
</div>
@endsection