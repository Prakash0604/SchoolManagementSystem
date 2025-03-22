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
                    <a class="btn btn-dark " href="{{ route('exam.index') }}"
                        style="width:250px;padding:10px;border-radius:20px" type="button"><i
                            class="fas fa-arrow-left"></i>View Exam List</a>
                    <div class="row">
                        @csrf
                        <div class="col-lg-4">
                            <div class="m-div">
                                <label for="" class="m-label bg-gradient-blue m-white">Academic Year</label>
                                <select class="form-select m-field" name="academic_year_id" id="academic_year_id">
                                    <option selected value="">Select one</option>
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

                        <div class="col-lg-4">
                            <div class="m-div">
                                <label for="" class="m-label bg-gradient-blue m-white">Education Level</label>
                                <select class="form-select m-field" name="education_level_id" id="education_level_id">

                                </select>
                            </div>
                            <span id="education_level_id-error" class="text-danger error-message"></span>
                        </div>

                    </div>

                    <div class="container-fluid mt-4">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="get-exam-detail-data">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
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
                </form>

            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="" id="updateSubjectData">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Update Subject</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="m-div">
                                            @csrf
                                            <input type="hidden" name="id" id="exam_subject_id">
                                            <label class="m-label bg-gradient-blue m-white">Subject*</label>
                                            <input type="text" class="form-control m-field"
                                                placeholder="Subject" name="subject" readonly
                                                id="subject">
                                                <input type="hidden" name="subject_id" id="subject_id">
                                        </div>
                                        <span id="subject_id-error" class="text-danger error-message"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="m-div">
                                            <input type="hidden" name="id" id="exam_id">
                                            <label class="m-label bg-gradient-blue m-white">Date*</label>
                                            <input type="date" class="form-control m-field"
                                                placeholder="Date" name="date" id="date">
                                        </div>
                                        <span id="date-error" class="text-danger error-message"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="m-div">
                                            <input type="hidden" name="id" id="exam_id">
                                            <label class="m-label bg-gradient-blue m-white">Full Marks*</label>
                                            <input type="number" class="form-control m-field"
                                                placeholder="Full marks" name="full_marks"
                                                id="full_marks">
                                        </div>
                                        <span id="full_marks-error" class="text-danger error-message"></span>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="m-div">
                                            <input type="hidden" name="id" id="exam_id">
                                            <label class="m-label bg-gradient-blue m-white">Pass Marks*</label>
                                            <input type="number" class="form-control m-field"
                                                placeholder="Pass marks" name="pass_marks"
                                                id="pass_marks">
                                        </div>
                                        <span id="pass_marks-error" class="text-danger error-message"></span>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="m-div">
                                            <input type="hidden" name="id" id="exam_id">
                                            <label class="m-label bg-gradient-blue m-white">Start Time*</label>
                                            <input type="time" class="form-control m-field"
                                                placeholder="Start time" name="start_at"
                                                id="start_at">
                                        </div>
                                        <span id="start_at-error" class="text-danger error-message"></span>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="m-div">
                                            <input type="hidden" name="id" id="exam_id">
                                            <label class="m-label bg-gradient-blue m-white">End Time*</label>
                                            <input type="time" class="form-control m-field"
                                                placeholder="End time" name="end_at"
                                                id="end_at">
                                        </div>
                                        <span id="end_at-error" class="text-danger error-message"></span>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        style="width:120px;padding:10px;border-radius:20px" data-bs-dismiss="modal"><i
                                            class="fas fa-times"></i>Close</button>
                                    <button class="btn btn-primary mt-1" id="updateBtn"
                                        style="width:120px;padding:10px;border-radius:20px" type="submit"><i
                                            class="fas fa-sync-alt"></i>
                                        Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Page-body end -->


            <!-- Page-body end -->
        </div>
    </div>
@endsection
