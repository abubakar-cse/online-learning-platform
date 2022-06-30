@extends("student.master")

@section("heading")
    My Enrolled Courses
@endsection

@section("student.content")

    <div class="row">
        <div class="col-md-12">
            <div class="card card-body border-0">
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Course Name</th>
                        <th>Instructor Name</th>
                        <th>Course Price</th>
                        <th>Enrollment Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($enrolledCourses as $enrolledCourse)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$enrolledCourse->course->title}}</td>
                        <td>{{$enrolledCourse->course->teacher->name}}</td>
                        <td>{{$enrolledCourse->course->fee}}</td>
                        <td>{{$enrolledCourse->course->enroll_status}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
