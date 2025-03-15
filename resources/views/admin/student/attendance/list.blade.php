@extends('admin.layout.main')
@section('content')
    <div class="container-fluid">
        <style>
            input[type=number] {
                width: 50px;
                padding-left: 5px;
                margin: 5px;
            }

            a:hover {

                cursor: pointer;

            }

            label {
                display: inline-block;
                color: #999;
                width: 20px;
                height: 20px;
                text-align: center;
                pedding: 6px 0;
                font-size: 12px;
                line-height: 1.428571429;
                border-radius: 20px;
                transition: all 0.3s;
                border: 1px solid #333;
                margin-left: 5px;
                cursor: pointer;
            }

            input[type=radio] {
                display: none;
            }

            .present:checked+label {
                border: 2px solid #5e81f4;
                background: #5e81f4;
                color: #fff;
            }

            .leave:checked+label {
                border: 2px solid #9698d6;
                background: #9698d6;
                color: #fff;
            }

            .absent:checked+label {
                border: 2px solid #ff808b;
                background: #ff808b;
                color: #fff;
            }

            @media (max-width:600px) {
                #desktop1 {
                    display: none;
                }

                #hide {
                    margin: 0px;
                }

                input[type=text] {
                    width: 40px;
                    margin: 0px;
                    pedding: 0px;
                }

                label {
                    margin-left: 2px;
                }
            }

            thead th:first-child {
                border-radius: 5px 0 0 5px;
            }

            thead th:last-child {
                border-radius: 0 5px 5px 0;
            }

            thead {
                width: 100% !important;
            }

            tbody td {
                padding-top: 20px !important;
                padding-bottom: 15px !important;
            }

            label {
                width: 65px;
            }
        </style>
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <!-- Row start -->
                <div class="row mb-4">
                    <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;">
                        <strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Attendance</strong>
                        <i class="ti-home"></i> - All Student Attendance
                    </div>
                </div>

                <button class="btn btn-primary " id="addStudentAttendanceBtn"
                    style="width:155px;padding:10px;border-radius:20px" type="button"><i class="fas fa-plus"></i> Add/Update</button>

                @include('admin.student.attendance.modal')
                <div class="row" style="margin-top:20px;">


                    <div class="col-md-2">
                        <div class="m-div  d-flex mx-auto">
                            <span class="m-label bg-gradient-blue m-white" style="padding-right: 30px !important;">Start
                                Date*</span>
                            <input type="date" class="form-control m-field" value="{{ date('Y-m-d') }}"
                                name="attendance_date" id="starting_date">
                        </div>
                        <span id="attendance_date-error" class="text-danger error-message"></span>
                    </div>

                    <div class="col-md-2">
                        <div class="m-div d-flex mx-auto">
                            <span class="m-label bg-gradient-blue m-white" style="padding-right: 30px !important;">End
                                Date*</span>
                            <input type="date" class="form-control m-field" value="{{ date('Y-m-d') }}"
                                name="attendance_date" id="ending_date">
                        </div>
                        <span id="attendance_date-error" class="text-danger error-message"></span>
                    </div>

                    <div class="col-md-2">
                        <div class="m-div p-t-0 p-b-0">
                            <span class="m-label bg-gradient-blue m-white" style="margin-top:-9px;z-index:1001; padding-right:30px">Academic Year*</span>
                            <select name="teacher" class="form-control form-select-lg m-field" id="year_id" required>
                                <option value="">Select*</option>

                                @foreach ($years as $year)
                                <option value="{{ $year->id }}">{{ $year->academic_title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="m-div p-t-0 p-b-0">
                            <span class="m-label bg-gradient-blue m-white" style="margin-top:-9px;z-index:1001; padding-right:30px">Education Level*</span>
                            <select name="teacher" class="form-control form-select-lg m-field" id="level_id" required>
                                <option value="">Select*</option>
                                @foreach ($educationLevels as $educationLevel)
                                <option value="{{ $educationLevel->id }}">{{ $educationLevel->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="m-div p-t-0 p-b-0">
                            <span class="m-label bg-gradient-blue m-white" style="margin-top:-9px;z-index:1001; padding-right:30px">Classroom*</span>
                            <select name="teacher" class="form-control form-select-lg m-field" id="class_id" required>
                                <option value="">Select*</option>

                                {{-- @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                @endforeach --}}
                            </select>
                        </div>
                    </div>

                    <div class="col-md-2 mb-2">
                        <div class="m-div p-t-0 p-b-0">
                            <span class="m-label bg-gradient-blue m-white" style="margin-top:-9px;z-index:1001;">Status*</span>
                            <select name="teacher" class="form-control form-select-lg m-field" id="filter_status" required>
                                <option value="">Select*</option>

                                <option value="P">Present</option>
                                <option value="L">Late In</option>
                                <option value="A">Absent</option>

                            </select>
                        </div>
                    </div>



                    <div class="table-responsive">
                        <table class="table table-border" id="get-attendance-data">
                            <thead>
                                <tr>
                                    <th scope="col">S.N</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Day</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Student Name</th>
                                    <th scope="col">Education Level</th>
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
