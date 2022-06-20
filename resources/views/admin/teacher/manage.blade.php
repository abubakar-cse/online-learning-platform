@extends("admin.master")

@section("title")
    Manage Teacher
@endsection

@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Teacher Info</h4>

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
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($teachers as $teacher)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$teacher->name}}</td>
                            <td>{{$teacher->email}}</td>
                            <td>{{$teacher->phone_no}}</td>
{{--                            <td>{{$teacher->address}}</td>--}}
                            <td class="text-center">
                                <img src="{{asset($teacher->image)}}" alt="" height="60" width="90">
                            </td>
                            <td>
                                <a href="{{route("teacher.edit", ["id" => $teacher->id])}}" class="btn btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route("teacher.delete", ["id" => $teacher->id])}}" class="btn btn-danger" onclick="return confirm('Are You Sure??')">
                                    <i class="fa fa-trash"></i>
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
