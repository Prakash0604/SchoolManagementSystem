<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addForm" class="addForm">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Classroom Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="page-wrapper">
                            <!-- Page-body start -->
                            <div class="page-body">
                                <!-- Row start -->
                                <h3 class="text-center w-100" id="sessionHeading" style="line-height:20px;">
                                    Classroom
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

                                <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                                    @csrf
                                    <input type="hidden" name="id" id="classroom_id">
                                    <div class="m-div col-md-12">
                                        <label class="m-label bg-gradient-blue m-white">Academic Year*</label>
                                        <select class="m-field form-select" id="academic_year_id" name="academic_year_id">
                                            <option value="">Select*</option>
                                            @foreach ($academicYears as $year)
                                            <option value="{{ $year->id }}">{{ $year->academic_title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <span id="academic_year_id-error" class="text-danger error-message"></span>

                                    <div class="m-div col-md-12">
                                        <label class="m-label bg-gradient-blue m-white">Education Level*</label>
                                        <select class="m-field form-select" id="education_level_id" name="education_level_id">
                                            <option value="">Select*</option>
                                            @foreach ($educationLevels as $level)
                                            <option value="{{ $level->id }}">{{ $level->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <span id="education_level_id-error" class="text-danger error-message"></span>


                                    <div class="m-div col-md-12">
                                        <label class="m-label bg-gradient-blue m-white">Classroom Title*</label>
                                        <input type="text" class="form-control m-field" placeholder="" name="class_title"
                                            id="class_title">
                                    </div>

                                    <span id="class_title-error" class="text-danger error-message"></span>

                                    <div class="m-div col-md-12">
                                        <label class="m-label bg-gradient-blue m-white">Class Teacher*</label>
                                        <select class="m-field form-select" id="user_id" name="user_id">
                                            <option value="">Select*</option>
                                            @foreach ($employees as $employee)
                                            <option value="{{ $employee->id }}">{{ $employee->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <span id="user_id-error" class="text-danger error-message"></span>


                                    <div class="m-div col-md-12">
                                        <label class="m-label bg-gradient-gray m-white">Monthly Fees*</label>
                                        <input type="text" class="form-control m-field" placeholder="" name="monthly_tution_fees"
                                            id="monthly_tution_fees">
                                    </div>
                                </div>
                            </div>
                            <!-- Page-body end -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" style="width:100px;padding:10px;border-radius:20px"
                        data-bs-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-warning" style="width:100px;padding:10px;border-radius:20px"
                        id="createBtn">Create</button>

                    <button type="submit" class="btn btn-warning" style="width:100px;padding:10px;border-radius:20px"
                        id="updateBtn">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
