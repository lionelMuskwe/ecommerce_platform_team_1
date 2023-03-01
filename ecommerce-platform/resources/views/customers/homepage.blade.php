@extends("../general/master")

@section("title")
    Home
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/customer-homepage.css')}}">
	<script defer src="{{asset('js/homepage.js')}}"></script>
@endsection

@section("content")
	<div class="col-sm-12">
		<p class="marquee">
			<span> “The more that you read, the more things you will know. The more that you learn, the more places you'll go.” - Dr Seuss &nbsp;</span>
		</p>
	</div>

	  <div class="d-flex row col-sm-12 products-container">
		  	@foreach ($products as $product)
			  <a href="{{ route('product.detail', ['id' => $product['id']]) }}" class="col-sm-4">
					<div class="row row-of-books">
							<div class="row col-sm-12 product-container">
								<div class="col-sm-12">
									<img src="{{ asset('images') }}/{{ $product->image}}" class="product-image">
								</div>
								<div class="col-sm-12">
									<div class="col-sm-12">
										<div class="product-title">{{ $product['title']}}</div>
									</div>
								</div>
							</div>
						<div>
						</div>
					</div>
				</a>
		  	@endforeach
		</div>





@endsection()



{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	   @foreach ($products as $product)
		<div class="carousel-item active">
			<img class="d-block w-100" src="{{ asset('images') }}/{{ $product->image }}" alt="First slide">
		</div>
		<div class="carousel-item active">
			<h1>Hello Silver</h1>
		</div>
		<div class="carousel-item active">
			<h1>Dan Silver</h1>
		</div>
		<div class="carousel-item active">
			<h1>Matt Scotch</h1>
		</div>
	  @endforeach
	</div>
	<a class="carousel-control-prev" style="z-index: 1" href="#carouselExampleIndicators" onclick="$('#carouselExampleIndicators').carousel('prev')" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" style="z-index: 1" href="#carouselExampleIndicators" onclick="$('#carouselExampleIndicators').carousel('next')" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
</div> --}}


