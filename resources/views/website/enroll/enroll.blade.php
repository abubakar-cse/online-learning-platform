@extends("website.master")

@section("title")
    Course Enroll
@endsection

@section("content")

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card card-body h-100">
                        <h3>Course Enroll Form</h3>
                        <hr/>
                        <form action="{{route("enroll.confirm", ["id" => $id])}}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-3">Name</div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" />
                                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : "" }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Email</div>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email" />
                                    <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : "" }}</span>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">Phone No</div>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="phone_no" />
                                    <span class="text-danger">{{$errors->has('phone_no') ? $errors->first('phone_no') : "" }}</span>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <div class="col-md-3">Payment Type</div>
                                <div class="col-md-9">
                                    <label><input type="radio" class="btn btn-success" name="payment_type" value="1" /> Pay Now </label>
                                    <label><input type="radio" class="btn btn-success" name="payment_type" checked value="2" /> Pay Later </label>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3"></div>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success" name="btn" value="Confirm Enroll" />
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
