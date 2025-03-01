@extends('admin.layout.main')
@section('content')
    <div class="container-fluid">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;">
                        <strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Grade
                            Subject</strong>
                        <i class="ti-home"></i> - {{ $title }}
                    </div>
                </div>
                <h5 class="text-center m-t-30 w-100" style="line-height:16px;">{{ $title }}
                    <br>
                    <div class="bg-gradient-blue" style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                    </div> <span class="f-12 m-dblue" style="display:inline-block;font-weight:100;">Required*</span>
                    <div class="bg-gradient-gray m-l-10"
                        style="width:20px;height:7px;border-radius:10px;display:inline-block;"></div> <span
                        class="f-12 gradient-gray" style="display:inline-block;font-weight:100;">Optional</span>
                </h5>
                <div class="row mb-4">
                    <div class="col-md-3"></div>
                    <div class="m-div col-md-3">
                        <label class="m-label bg-gradient-blue m-white">Select Year*</label>
                        <select name="academic_year_id" class="form-control m-field" id="academic_year_id">
                            <option value="">Select*</option>
                            @foreach ($academicYear as $year)
                                <option selected value='{{ $year->id }}'>{{ $year->academic_title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="m-div col-md-3">
                        <label class="m-label bg-gradient-blue m-white">Select Education Level*</label>
                        <select name="education_level_id" class="form-control m-field" id="education_level_id">
                            <option value="">Select*</option>
                            @foreach ($grades as $grade)
                                <option selected value='{{ $grade->id }}'>{{ $grade->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <div class="table-responsive mt-5 mb-4">
                    <table class="table table-bordered" id="get-assign-subject-data">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Full Marks</th>
                                <th scope="col">Pass Marks</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>


            </div>
            <!-- Page-body end -->
        </div>


        <div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content">
                    <form id="addForm" class="addForm">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Grade Subject Form</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row">

                                            <h3 class="text-center w-100" id="sessionHeading" style="line-height:20px;">
                                                Grade Subject Edit
                                                <br>
                                                <div class="bg-gradient-blue"
                                                    style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                                                </div>
                                                <span class="f-12 m-dblue"
                                                    style="display:inline-block;font-weight:100;">Required*</span>
                                                <div class="bg-gradient-gray m-l-10"
                                                    style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                                                </div>
                                                <span class="f-12 gradient-gray"
                                                    style="display:inline-block;font-weight:100;">Optional</span>
                                            </h3>
                                        </div>

                                        <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">

                                            <div class="col-lg-12">
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <th>Year</th>
                                                            <td id="year_id">2025</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Education Level</th>
                                                            <td id="level_id">Three</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Subject</th>
                                                            <td id="subject_id">Math</td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="2">
                                                                <form id="educationForm">
                                                                    <input type="hidden" name="id"
                                                                        id="assign_subject_id">

                                                                    <div class="m-div">
                                                                        <label
                                                                            class="m-label bg-gradient-blue m-white">Full Marks*</label>
                                                                        <input type="text" class="form-control m-field"
                                                                            placeholder="Enter Marks" name="full_marks"
                                                                            id="full_marks">
                                                                    </div>

                                                                    <div class="m-div mt-4">
                                                                        <label
                                                                            class="m-label bg-gradient-blue m-white">Pass Marks*</label>
                                                                        <input type="text" class="form-control m-field"
                                                                            placeholder="Enter Marks" name="pass_marks"
                                                                            id="pass_marks">
                                                                    </div>
                                                                    <button type="button" class="btn btn-secondary mt-4"
                                                                    style="width:100px;padding:10px;border-radius:20px" data-bs-dismiss="modal">Close</button>

                                                                    <button type="submit" class="btn btn-warning mt-4"
                                                                        style="width:100px;padding:10px;border-radius:20px"
                                                                        id="updateBtn">Update</button>

                                                                </form>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                @csrf
                                                <span id="title-error" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
