<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalLabel" aria-hidden="false">

    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Assign Attendance</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="page-body">
                    <div class="row" style="">
                        <div class="col-2"></div>
                        <div class="col-lg-12 m-t-30"
                            style="background:#fff;border-radius:10px;padding:20px;box-shadow:0px 0px 1px 0px gray;">

                            <h6 class="text-center"><span id="attendance_status"
                                    class="bg-gradient-success m-white f-10"
                                    style="border-radius:10px;padding:1px 5px 1px 5px;"><i
                                        class="fa-duotone fa-solid fa-check"></i> Already
                                    taken</span> </h6>
                            <h4 class="text-center m-t-20" style="line-height:20px;"> Update
                                Attendance
                                <br>
                                <div class="bg-m-blue1"
                                    style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                                </div> <span class="f-12" style="display:inline-block;font-weight:100;">Present</span>
                                <div class="bg-m-gray m-l-10"
                                    style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                                </div> <span class="f-12"
                                    style="display:inline-block;font-weight:100;">On-leave</span>
                                <div class="bg-m-orange m-l-10"
                                    style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                                </div> <span class="f-12" style="display:inline-block;font-weight:100;">Absent</span>
                            </h4>

                            <form class=" m-t-10 myform" id="myform">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-3">
                                        <div class="m-div ">
                                            <span class="m-label bg-gradient-blue m-white">Academic Year</span>
                                            <select name="academic_year_id" id="academic_year_id"
                                                class="form-control m-field">
                                                <option value="">Select..</option>
                                                @foreach ($years as $year)
                                                <option value="{{ $year->id }}">{{ $year->academic_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="m-div ">
                                            <span class="m-label bg-gradient-blue m-white">Education Level</span>
                                            <select name="education_level_id" id="education_level_id"
                                                class="form-control m-field">
                                                <option value="">Select..</option>
                                                @foreach ($educationLevels as $educationLevel)
                                                <option value="{{ $educationLevel->id }}">{{ $educationLevel->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-3">
                                        <div class="m-div ">
                                            <span class="m-label bg-gradient-blue m-white">Classroom</span>
                                            <select name="classroom_id" id="classroom_id"
                                                class="form-control m-field">
                                                <option value="">Select..</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="m-div ">
                                            <span class="m-label bg-gradient-blue m-white">Attendance Date</span>
                                            <input type="date" name="attendance_date" id="attendance_date"
                                                class="form-control m-field">
                                        </div>
                                    </div>
                                </div>


                                <table class="table center" style="margin:0 auto;" cellpadding="10px">
                                    <thead class="text-dark" style="background:#e6e7e8;">
                                        <tr>
                                            <th>ID</th>
                                            <th>Student Name</th>
                                            <th id="desktop1">Username</th>
                                            <th id="desktop1">Roll no</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-secondary student-data">
                                        {{-- @foreach ($employees as $employee)
                                            @php
                                                $status = $attendances[$employee->id] ?? 'P';
                                            @endphp
                                            <tr>
                                                <td>{{ $employee->username }}</td>
                                                <td>{{ $employee->name }}</td>
                                                <td id="desktop1">{{ $employee->guardains }}</td>
                                                <td id="desktop1">{{ $employee->role->title }}</td>
                                                <td style="width:100px;">
                                                    <input type="radio" id="present-{{ $employee->id }}"
                                                        name="attendance[{{ $employee->id }}]" value="P"
                                                        class="present" {{ $status == 'P' ? 'checked' : '' }}>
                                                    <label for="present-{{ $employee->id }}">P</label>

                                                    <input type="radio" id="leave-{{ $employee->id }}"
                                                        name="attendance[{{ $employee->id }}]" value="L"
                                                        class="leave" {{ $status == 'L' ? 'checked' : '' }}>
                                                    <label for="leave-{{ $employee->id }}">L</label>

                                                    <input type="radio" id="absent-{{ $employee->id }}"
                                                        name="attendance[{{ $employee->id }}]" value="A"
                                                        class="absent" {{ $status == 'A' ? 'checked' : '' }}>
                                                    <label for="absent-{{ $employee->id }}">A</label>
                                                </td>
                                            </tr>
                                        @endforeach --}}


                                    </tbody>
                                </table>
                                <h5 class="w-100 text-center p-20"><button type="submit" style="border-radius:25px;"
                                        id="submitBtn" class="submit btn bg-c-yellow text-dark"><i
                                            class="ti-reload"></i>
                                        Update</button></h5>
                            </form>
                        </div>
                        <div class="col-lg-2"></div>
                        <!-- Row end -->
                        <!-- Row start -->

                        <!-- Row end -->
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>
        </div>
    </div>
</div>
