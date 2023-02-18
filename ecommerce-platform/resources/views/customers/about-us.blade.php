@extends("../general/master")

@section("title")
About Us
@endsection()

@section("links")
<link rel="stylesheet" href="{{asset('css/about-us.css')}}">
@endsection

@section("content")

<body>
    <section id="about">
        <div class="about-1">
            <h1>ABOUT US</h1>
            <p>Welcome to Readers Republic! We are a team of book lovers dedicated to providing you with an unparalleled
                shopping experience for you and all your reading needs. Our passion for books and reading led us to
                create this platform where you can easily browse, discover and purhcase your favourite titles from the
                comfort of your own home. We offer an extensive selection of books across various genres, including
                fiction, non-fiction, children's books, textbooks and more.</p>
        </div>
        <div id="about-2">
            <div class="content-box-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <i class="fa fa-book"></i>
                                <h3>MISSION</h3>
                                <hr>
                                <p>Our mission is to provide a convenient and reliable online bookstore that offers an
                                    extensive selection of books at competitive prices. We strive to create a welcoming
                                    and and engaging environment that inspires a love of readingand encourages personal
                                    growth and education. We believe that books have the power to enrich our lives and
                                    connect us to new ideas, perspectives and experiences. Therefore we are committed to
                                    curating a diverse collection of books that appeals to a broad range of readers,
                                    from young children to avid readers and scholars.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <i class="fa fa-globe"></i>
                                <h3>VISION</h3>
                                <hr>
                                <p>Our Vision is to be the premier destination for book lovers everywhere, providing an
                                    unparalleled online shopping experience for all reading enthusiasts. We strive to be
                                    recognized as the leading ecommerce bookstore offering a vast and diverse selection
                                    of books, excellent customer service and innovative digital experiences that enhance
                                    the joy of reading. We envision a future where our bookstore is synonymous with
                                    quality, relaibility and accessibility. Our goal is to inpire a love of reading and
                                    learning among people of all ages and backgrounds making books more accessible to
                                    those who might not otherwise have access to them.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                <i class="fa fa-pencil"></i>
                                <h3>ACHIEVEMENTS</h3>
                                <hr>
                                <p>Some of our achievements include:</br>
                                <ul>
                                    <li>Served millions of customers</li>
                                    <li>Provide a vast variety of books and accessories</li>
                                    <li>Excellent customer reviews</li>
                                    <li>Innovative digital experiences</li>
                                    <li>Award for most innovative new business</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</body>



@endsection