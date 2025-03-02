@extends('admin.layout.main')
@section('content')
    <div class="container-fluid">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Row start -->
                <div class="row mb-4">
                    <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;">
                        <strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Academic
                            Year</strong>
                        <i class="ti-home"></i> - {{ $title }}
                    </div>
                </div>

                <button class="btn btn-primary " id="addStudentBtn" style="width:120px;padding:10px;border-radius:20px"
                    type="button"><i class="fas fa-plus"></i> Add New</button>

                <div class="row" style="margin-top:20px;">

                    @include('admin.student.modal')


                    <div class="table-responsive">
                        <table class="table table-border" id="get-student-data">
                            <thead>
                                <tr>
                                    <th scope="col">S.N</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Academic Year</th>
                                    <th scope="col">Education Level</th>
                                    <th scope="col">Classroom</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>

                </div>
                <!-- Row end -->
                <!-- Row start -->

                <!-- Row end -->
            </div>
            <!-- Page-body end -->
        </div>
    </div>
@endsection
