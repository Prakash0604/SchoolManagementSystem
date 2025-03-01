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

    </div>
@endsection
