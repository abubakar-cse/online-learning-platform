@extends("website.master")

@section("title")
    {{Session::get("student_name")}} - Dashboard
@endsection

@section("content")

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card card-body">
                        <div class="list-group">
                            <a href="" class="list-group-item">My Profile</a>
                            <a href="{{route("student.course")}}" class="list-group-item">My Course</a>
                            <a href="" class="list-group-item">My Account</a>
                            <a href="" class="list-group-item">Tutorials</a>
                            <a href="" class="list-group-item">Notice</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card card-body">
                        <h2 class="text-center">@yield("heading")</h2>
                        <hr/>
                        @yield("student.content")
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
