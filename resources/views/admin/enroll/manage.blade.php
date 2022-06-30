@extends("admin.master")

@section("title")
    Manage Enroll Student
@endsection

@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Enroll Student Info</h4>

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
                            <th>#</th>
                            <th>Course Info</th>
                            <th>Teacher Info</th>
                            <th>Teacher Info</th>
                            <th>Starting Date</th>
                            <th>Enroll Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($enrolls as $enroll)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ isset($enroll->course->title)?$enroll->course->title."( Tk. ".$enroll->course->fee." )":''}}</td>
                                <td>{{$enroll->course->teacher->name. "( ".$enroll->course->teacher->phone_no." )"}}</td>
                                <td>{{isset($enroll->student->name) ? $enroll->student->name."( ".$enroll->student->phone_no." )" : ""}}</td>
                                <td>{{$enroll->course->start_date}}</td>
                                <td>{{$enroll->enroll_status}}</td>
                                <td>
                                    <a href="{{route("admin.enroll-update-status", ["id" => $enroll->id])}}" class="btn {{$enroll->enroll_status == "Complete" ? "btn-success disabled" : "btn-danger"}} btn-sm" onclick="return confirm('Are You Sure??')">
                                        <i class="fa fa-arrow-up"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
