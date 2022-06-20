@extends("teacher.master")

@section("title")
    Manage Course
@endsection

@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Course Info</h4>

                    @if($message = Session::get("message"))
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="text-center">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Course Fee</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->start_date}}</td>
                                <td>{{$course->end_date}}</td>
                                <td>{{$course->fee}}</td>
                                <td class="text-center">
                                    <img src="{{asset($course->image)}}" alt="" height="60" width="90">
                                </td>
                                <td>
                                    <a href="{{route("course.detail", ["id" => $course->id])}}" class="btn btn-primary">
                                        <i class="fa fa-book-open"></i>
                                    </a>
                                    <a href="{{route("course.edit", ["id" => $course->id])}}" class="btn btn-success {{$course->teacher_id == Session::get("teacher_id") ? "" : "disabled"}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route("course.delete", ["id" => $course->id])}}" class="btn btn-danger {{$course->teacher_id == Session::get("teacher_id") ? "" : "disabled"}}" onclick="return confirm('Are You Sure??')">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

@endsection
