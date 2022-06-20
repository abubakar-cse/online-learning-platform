@extends("website.master")

@section("title")
    Course
@endsection

@section("content")

    <section class="py-3 bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset("/")}}website/img/course1.jpg" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Web Development</h5>
                            <p>Course Fee : Tk. 24999</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset("/")}}website/img/course2.jpg" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Web Design</h5>
                            <p>Course Fee : Tk. 14999</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset("/")}}website/img/course3.jpg" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Android Development</h5>
                            <p>Course Fee : Tk. 24999</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset("/")}}website/img/course4.jpg" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Python Development</h5>
                            <p>Course Fee : Tk. 19999</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset("/")}}website/img/course3.jpg" alt="" class="h-250">
                        <div class="card-body">
                            <h5>IOS Development</h5>
                            <p>Course Fee : Tk. 21799</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset("/")}}website/img/course1.jpg" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Software Architecture</h5>
                            <p>Course Fee : Tk. 14499</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset("/")}}website/img/course4.jpg" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Database Design</h5>
                            <p>Course Fee : Tk. 9798</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{asset("/")}}website/img/course2.jpg" alt="" class="h-250">
                        <div class="card-body">
                            <h5>Digital Marketing</h5>
                            <p>Course Fee : Tk. 19999</p>
                            <hr/>
                            <a href="" class="btn btn-success">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
