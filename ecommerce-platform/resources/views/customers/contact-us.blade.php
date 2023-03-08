@extends("../general/master")

@section("title")
    Contact Us
@endsection()

@section("links")
    <link rel="stylesheet" href="{{asset('css/contact-us.css')}}">

        <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
    rel="stylesheet"
    />
@endsection

@section("content")
 
    <div class="container">
        <section class="mb-4">
            <h2 class="h2-responsive font-weight-bold text-center my-5">Contact Us</h2>
            <p class="text-center w-responsive mx-auto mb-5"> Do you have any questions? Please do not hesitate to contact us directly
                and a member of our team will get back to you shortly.</p>

            <div class="row">
                <div  class="col-md-9 mb-md-0 mb-5">
                    <form id="contactform">

                        <div class="row">
                            <div class = "col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="name" class="form-control" placeholder="Full Name">
                                </div>
                            </div>

                            <div class = "col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" name="email" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0"><br><br>
                                    <input type="text" name="subject" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form"><br><br>
                                    <textarea type="text" name="message" rows="3" class="form-control md-textarea" placeholder="Your Message"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="text-center text-md-left"><br><br>
                            <button class="btn btn-primary" type="submit" style="background:purple" >Contact Us!</button>
                        </div>

                    </form>
                </div>

                <div class="col-md-3 text-center text-primary">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p class="text-dark">New York, NY 2333, US</p></li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p class="text-dark">+44 7729 69677</p></li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p class="text-dark">ReadersRepublic23@gmail.com</p></li>

                    </ul>

                </div>
                
            </div>
        </section>
    </div>



    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
    ></script>

@endsection()

