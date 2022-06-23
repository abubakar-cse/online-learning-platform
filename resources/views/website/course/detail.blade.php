@extends("website.master")

@section("title")
    {{$course->title}}
@endsection

@section("content")

    <section class="py-3 bg-gradient">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="card card-body h-100 border-0">
                        <img src="{{asset($course->image)}}" alt="{{$course->title}}" class="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body h-100 border-0">
                        <h1>{{$course->title}}</h1>
                        <h4>Trainer Name: {{$course->teacher->name}}</h4>
                        <h5>Course Fee : Tk. {{$course->fee}}</h5>
                        <h6>Class Start Date: {{$course->start_date}}</h6>
                        <hr>
                        <p>{{$course->short_description}}</p>
                        <hr>
                        <a href="{{route("enroll" , ["id" => $course->id])}}" class="btn btn-outline-success px-5 {{$check == true ? "disabled" : ""}}">Enroll Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 bg-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-body">
                        <h5>Long Description</h5>
                        <p>{!! $course->long_description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
