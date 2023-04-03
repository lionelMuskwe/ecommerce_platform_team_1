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
                  <p class="product-price">${{ number_format($product['price'],2) }}</p>
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

    
      <div class="col-md-12 col-lg-12">
        <div class="promotion-container">
          <div class="promotion-two">
            <span>Buy TWO BOOKS <br> Get ONE BOOK for FREE</span>
          </div>
          <div class="promotion-one">
            <span></span>
            <p>Add books to basket and discount will be applied automatically.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <!-- Testimonial section -->
<section class="testimonial-section">
  <h2 class="testimonial-heading">Testimonials</h2>
  <div class="testimonial-container">
    <div class="testimonial-card">
     
      <div class="testimonial-info">
        <h3 class="testimonial-name">John Doe</h3>
        <p class="testimonial-stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
        </p>
        <p class="testimonial-text">"I would highly recommend Readers Republic to anyone looking for quality books at affordable prices."</p>
      </div>
    </div>
    <div class="testimonial-card">
     
      <div class="testimonial-info">
        <h3 class="testimonial-name">Jane Doe</h3>
        <p class="testimonial-stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
          <i class="far fa-star"></i>
        </p>
        <p class="testimonial-text">"The books arrived quickly and were in excellent condition. I am very happy with my purchase."</p>
      </div>
    </div>
    <div class="testimonial-card">
      
      <div class="testimonial-info">
        <h3 class="testimonial-name">Tom Smith</h3>
        <p class="testimonial-stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="far fa-star"></i>
          <i class="far fa-star"></i>
        </p>
        <p class="testimonial-text">"The website was easy to navigate and the prices were very reasonable. I will definitely be shopping here again."</p>
      </div>
    </div>
    <div class="final-card">
    <a href="#" class="back-to-top">Back to top</a>
    </div>
  </div>
</section>

@endsection
