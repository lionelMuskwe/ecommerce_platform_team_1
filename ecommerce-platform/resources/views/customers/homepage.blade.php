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
		<section>
            <br>
            <br>
			<h2>Products</h2>
			<p>insert carousel of products here</p>
            <br>
			<h2>Best Sellers</h2>
            <br>
			<ul>
				<li>Web Design</li>
				<li>Web Development</li>
				<li>Search Engine Optimization</li>
            </ul>
            <h2>New Books</h2>
            <br>
		</section>
	</main>
	<footer>
		<p>&copy; <?php echo date("Y"); ?> My Website</p>
	</footer>

@endsection()

