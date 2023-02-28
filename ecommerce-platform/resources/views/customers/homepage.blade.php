@extends("../general/master")

@section("title")
    Home
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/customer-homepage.css')}}">
@endsection

@section("content")
    {{-- Content goes in this section --}}
    <header>
		<h1>Readers Republic</h1>
	</header>
	<main>
	<section class="hot-picks">

  <h2>Hot Picks</h2>
  <div class="carousel-container">
    <div class="carousel">
      <div class="carousel-item">
        <img src="{{ asset('images/1.jpg') }}" alt="Book 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/2.jpg') }}" alt="Book 2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/3.jpg') }}" alt="Book 3">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/4.jpg') }}" alt="Book 4">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/5.jpg') }}" alt="Book 5">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/6.jpg') }}" alt="Book 6">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/7.jpg') }}" alt="Book 7">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/8.jpg') }}" alt="Book 8">
      </div>
    </div>
    <div class="carousel-dots"></div>
    <div class="carousel-controls">
      <div class="prev-btn">&#8249;</div>
      <div class="next-btn">&#8250;</div>
    </div>
  </div>
</section>


        <section class="best-sellers">
            <h2>Best Sellers</h2>
            <ul>
                <li>Web Design</li>
                <li>Web Development</li>
                <li>Search Engine Optimization</li>
                <li>User Experience</li>
            </ul>
        </section>

        <section class="new-books">
            <h2>New Books</h2>
            <div class="thumbnails">
                <img src="{{ asset('images/9.jpg') }}" alt="Book 9">
                <img src="{{ asset('images/10.jpg') }}" alt="Book 10">
                <img src="{{ asset('images/11.jpg') }}" alt="Book 11">
                <img src="{{ asset('images/12.jpg') }}" alt="Book 12">
            </div>
        </section>

	</main>
	<footer>
		<p>&copy; <?php echo date("Y"); ?> My Website</p>
	</footer>

@endsection()



