@extends("admin.master")

@section("title")
    Manage Student
@endsection

@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Student Info</h4>

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone No</th>
                            {{--                            <th>Address</th>--}}
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($students as $student)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td>{{$student->phone_no}}</td>
                                {{--                            <td>{{$teacher->address}}</td>--}}
                                <td class="text-center">
                                    <img src="{{asset($student->image)}}" alt="" height="60" width="90">
                                </td>
                                <td>{{$student->status == 1 ? "Active" : "Inactive"}}</td>
                                <td>
                                    <a href="{{route("admin.student-update-status", ["id" => $student->id])}}" class="btn {{$student->status ==1 ? "btn-success" : "btn-danger"}} btn-sm" onclick="return confirm('Are You Sure??')">
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
