<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
        <div class="modal-content">
            <form id="addForm" class="addForm">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Exam Form</h1>
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
                                        Exam Form
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
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="m-div">
                                                    <input type="hidden" name="id" id="exam_id">
                                                    <label class="m-label bg-gradient-blue m-white">Exam Title*</label>
                                                    <input type="text" class="form-control m-field"
                                                        placeholder="First Terminal Examination" name="title"
                                                        id="title">
                                                </div>
                                                <span id="title-error" class="text-danger error-message"></span>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="m-div">
                                                    <label for=""
                                                        class="m-label bg-gradient-blue m-white">Academic Year</label>
                                                    <select class="form-select m-field" name="academic_year_id"
                                                        id="academic_year_id">
                                                        <option value="">Select one</option>
                                                        @foreach ($years as $year)
                                                        <option value="{{ $year->id }}">{{ $year->academic_title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <span id="academic_year_id-error" class="text-danger error-message"></span>
                                            </div>
                                        </div>
                                        @csrf
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="m-div">
                                                    <label class="m-label bg-gradient-blue m-white">Starting
                                                        Date*</label>
                                                    <input type="date" placeholder="e.g 2025-01-01"
                                                        class="form-control m-field" name="start_date" id="start_date">
                                                </div>
                                                <span id="start_date-error" class="text-danger error-message"></span>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="m-div">
                                                    <label class="m-label bg-gradient-blue m-white">Ending Date*</label>
                                                    <input type="date" class="form-control m-field"
                                                        placeholder="e.g 2025-12-30" id="end_date" name="end_date">
                                                </div>
                                                <span id="end_date-error" class="text-danger error-message"></span>
                                            </div>
                                        </div>

                                        <div class="m-div">
                                            <label class="m-label bg-gradient-gray m-white">Description</label>
                                            <textarea name="description" id="description" cols="30" rows="10" class="form-control m-field"></textarea>
                                        </div>
                                        <span id="description-error" class="text-danger error-message"></span>

                                        <div class="m-div">
                                            <label class="m-label bg-gradient-gray m-white">Publish Date*</label>
                                            <input type="date" class="form-control m-field"
                                                placeholder="e.g 2025-12-30" id="publish_date" name="publish_date">
                                        </div>
                                        <span id="publish_date-error" class="text-danger error-message"></span>

                                    </div>
                                </div>
                            </div>
                            <!-- Page-body end -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        style="width:100px;padding:10px;border-radius:20px" data-bs-dismiss="modal">Close</button>

                    <button type="submit" class="btn btn-warning"
                        style="width:100px;padding:10px;border-radius:20px" id="createBtn">Create</button>

                    <button type="submit" class="btn btn-warning"
                        style="width:100px;padding:10px;border-radius:20px" id="updateBtn">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
