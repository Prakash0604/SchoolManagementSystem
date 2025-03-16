@extends('admin.layout.main')
@section('content')
    <div class="container-fluid">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row mb-4">
                    <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;">
                        <strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Exam</strong>
                        <i class="ti-home"></i> - {{ $title }}
                    </div>
                </div>

                <form id="storeExamSubject">

                    <div class="row">
                        @csrf
                        <div class="col-lg-4">
                            <div class="m-div">
                                <label for="" class="m-label bg-gradient-blue m-white">Academic Year</label>
                                <select class="form-select m-field" name="academic_year_id" id="academic_year_id">
                                    <option value="">Select one</option>
                                    @foreach ($years as $year)
                                        <option value="{{ $year->id }}">{{ $year->academic_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="academic_year_id-error" class="text-danger error-message"></span>
                        </div>

                        <div class="col-lg-4">
                            <div class="m-div">
                                <label for="" class="m-label bg-gradient-blue m-white">Exam</label>
                                <select class="form-select m-field" name="exam_id" id="exam_id">

                                </select>
                            </div>
                            <span id="exam_id-error" class="text-danger error-message"></span>
                        </div>

                        <div class="col-lg-2">
                            <div class="m-div">
                                <label for="" class="m-label bg-gradient-blue m-white">Education Level</label>
                                <select class="form-select m-field" name="education_level_id" id="education_level_id">

                                </select>
                            </div>
                            <span id="education_level_id-error" class="text-danger error-message"></span>
                        </div>

                        <div class="col-lg-2 mt-3">
                            <button class="btn btn-primary mt-1 " id="filterBtn"
                                style="width:120px;padding:10px;border-radius:20px" type="button"><i
                                    class="fas fa-plus"></i>
                                Filter</button>

                        </div>

                    </div>

                    <div class="container-fluid mt-4">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Full Marks</th>
                                        <th scope="col">Pass Marks</th>
                                        <th scope="col">Start Time</th>
                                        <th scope="col">End Time</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>

                    <div class="container d-flex displayButton d-none">
                    <button class="btn btn-primary mt-1 mx-auto" id="submitBtn"
                    style="width:120px;padding:10px;border-radius:20px" type="submit"><i
                        class="fas fa-plus"></i>
                    Submit</button>
                </div>
                </form>

            </div>



            <!-- Page-body end -->
        </div>
    </div>
@endsection
