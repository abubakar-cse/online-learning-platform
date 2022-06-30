@extends("website.master")

@section("title")
    Login/Registration
@endsection

@section("content")

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Login Form</h3>
                        <hr/>
                        @if($message = Session::get("message"))
                            <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                {{$message}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <form action="{{route("student.login")}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-3">Email</div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Password</div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="btn" value="Login" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100">
                        <h3>Registration Form</h3>
                        <hr/>
                        <form action="{{route("student.register")}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-3">Name</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Phone No</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="phone_no" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Email</div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Password</div>
                                <div class="col-md-9">
                                    <input type="password" class="form-control" name="password" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="btn" value="Registration" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
