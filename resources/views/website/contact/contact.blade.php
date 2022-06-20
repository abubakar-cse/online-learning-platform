@extends("website.master")

@section("title")
    Contact
@endsection

@section("content")

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Contact With Us</h3>
                        <hr/>
                        <p>House # 420, Road # 120, West Dhanmondi, Dhaka-1209</p>
                        <p>Phone: +880 1770 568579</p>
                        <p>Phone: +880 1515 221565</p>
                        <p>Contact Email: info@mabe.com</p>
                        <p>Support Email: support@mabe.com</p>
                        <hr/>
                        <h3>Follow Us</h3>
                        <hr/>
                        <ul class="nav mx-auto">
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-facebook-square"></i></a></li>
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-twitter-square"></i></a></li>
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-linkedin-in"></i></a></li>
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-github-square"></i></a></li>
                            <li><a href="" class="nav-link text-black"><i class="fa-brands fa-2x fa-google-plus-square"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Give Us Your Message</h3>
                        <hr/>
                        <form action="" method="POST"></form>
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-3">Your Name</div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">Your Email</div>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">Phone No</div>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="phone_number">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3">Your Message</div>
                            <div class="col-md-9">
                                <textarea class="form-control" name="message" > </textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success px-5" name="btn" value="Send Message">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <h3>Find Us On Google Map</h3>
                <hr/>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9024424301397!2d90.39108011498136!3d23.750858084589126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1655266392858!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

@endsection
