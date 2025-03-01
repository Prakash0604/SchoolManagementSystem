@extends('admin.layout.main')
@section('content')
    <div class="container-fluid">
        <div class="page-wrapper">
            <!-- Page-body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-12 p-10 f-14" style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;">
                        <strong style="border-right:1px solid #777;padding-right:10px;margin-right:10px;">Subjects</strong>
                        <i class="ti-home"></i> - Assign Subjects
                    </div>
                </div>
                <h5 class="text-center m-t-30 w-100" style="line-height:16px;">Assign Subjects
                    <br>
                    <div class="bg-gradient-blue" style="width:20px;height:7px;border-radius:10px;display:inline-block;">
                    </div> <span class="f-12 m-dblue" style="display:inline-block;font-weight:100;">Required*</span>
                    <div class="bg-gradient-gray m-l-10"
                        style="width:20px;height:7px;border-radius:10px;display:inline-block;"></div> <span
                        class="f-12 gradient-gray" style="display:inline-block;font-weight:100;">Optional</span>
                </h5>

                @if (session()->has('success'))
                    <div class="alert alert-success text-center mt-4 mb-4 alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>{{ session()->get('success') }}</strong>
                    </div>
                @endif

                @if (session()->has('error'))
                    <div class="alert alert-danger text-center mt-4 mb-4 alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <strong>{{ session()->get('error') }}</strong>
                    </div>
                @endif

                <form action="{{ route('assign-subject.store') }}" id="storeAssignSubject" method="post">
                    @csrf
                    <table
                        style="width:100%;border-spacing: 5px;border-collapse: separate;position: relative;overflow-x: auto;">
                        <tr class="row">
                            <td class="col-6 p-r-0">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-blue m-white">Select Year*</label>
                                    <select name="academic_year_id" class="form-control m-field" id="academic_year_id">
                                        <option value="">Select*</option>
                                        @foreach ($academicYears as $years)
                                            <option value='{{ $years->id }}'>{{ $years->academic_title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <span id="academic_year_id-error" class="text-danger"></span>
                            </td>

                            <td class="col-6 p-r-0">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-blue m-white">Select Education Level*</label>
                                    <select name="education_level_id" class="form-control m-field" id="education_level_id">
                                        <option value="">Select*</option>
                                        @foreach ($levels as $level)
                                            <option value='{{ $level->id }}'>{{ $level->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <span id="education_level_id-error" class="text-danger"></span>
                            </td>
                        </tr>
                    </table>

                    <table id="textboxDiv"
                        style="width:100%;border-spacing: 5px;border-collapse: separate;position: relative;overflow-x: auto;">
                        <tr class="row">
                            <td class="col-4 p-r-0">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-blue m-white">Select Subject*</label>
                                    <select name="subject_id[]" class="form-control m-field subject_id" id="subject_id">

                                    </select>
                                </div>
                                <span id="subject_id-error" class="text-danger"></span>
                            </td>
                            <td class="col-4">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-blue m-white">Full Marks*</label>
                                    <input type="number" name="full_marks[]" id="full_marks" placeholder="Total Full Marks"
                                        min="0" class="form-control m-field">
                                </div>
                                <span id="full_marks-error" class="text-danger"></span>

                            </td>
                            <td class="col-3">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-blue m-white">Pass Marks*</label>
                                    <input type="number" name="pass_marks[]" id="pass_marks" placeholder="Total Pass Marks"
                                        min="0" class="form-control m-field">
                                </div>
                                <span id="pass_marks-error" class="text-danger"></span>
                            </td>
                            <td class="col-1 mt-3 d-flex align-items-center">
                                <div class="">
                                    <span id="add" class="btn btn-sm bg-gradient-dark m-white addMoreBtn"
                                        style="border-radius:15px;margin-left:8px!important;"><i class="fas fa-plus"></i>
                                        Add more</span>
                                </div>
                            </td>
                        </tr>


                        <div id="">


                        </div>
                    </table>
                    <div class="text-center m-t-10">

                        <div class="m-t-40 p-b-30">
                            <button class="btn bg-c-yellow" style="border-radius:20px;" id="submitBtn" type="submit"
                                name="addsubjects"><i class="fas fa-plus"></i> Assign Subjects</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <script>
        let subjects = @json($subjects);
    </script>
@endsection
