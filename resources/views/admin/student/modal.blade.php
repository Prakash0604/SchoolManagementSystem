<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="addForm" class="addForm">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Student Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="page-body">
                            <!-- Row start -->
                            <div class="row">

                                <h3 class="text-center m-t-20 w-100" style="line-height:20px;">Admission Form
                                    <br>
                                    <div class="bg-gradient-blue"
                                        style="width:20px;height:7px;border-radius:10px;display:inline-block;"></div>
                                    <span class="f-12 m-dblue"
                                        style="display:inline-block;font-weight:100;">Required*</span>
                                    <div class="bg-gradient-gray m-l-10"
                                        style="width:20px;height:7px;border-radius:10px;display:inline-block;"></div>
                                    <span class="f-12 gradient-gray"
                                        style="display:inline-block;font-weight:100;">Optional</span>
                                </h3>

                                <form action="newstudent.php" method="post" enctype="multipart/form-data"
                                    id="myform">
                            </div>
                            <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                                <h6 class="w-100" style="border-bottom:1px solid #999;">
                                    <div class="bg-gradient-dark m-white"
                                        style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:7px;">
                                        1</div> Student Information <span style="font-size:12px;"
                                        class="f-right"></span>
                                </h6>
                                <div class="col-lg-4">
                                    <div class="m-div">
                                        @csrf
                                        <input type="hidden" name="" id="student_id">
                                        <label class="m-label bg-gradient-blue m-white">Student Name*</label>
                                        <input type="text" class="form-control m-field" placeholder="Name of Student"
                                            id="student_name" name="student_name">
                                    </div>
                                    <div class="m-div">
                                        <label class="m-label bg-gradient-gray m-white">Picture - Optional</label>
                                        <input type="file" class="form-control m-field" name="student_image"
                                            id="student_image">
                                    </div>
                                    <div class="appendImage mt-2">

                                    </div>
                                    <span class="bg-c-yellow m-round m-t-0 m-l-10"
                                        style="font-size:10px;padding-left:5px; padding-right:5px;">Max size
                                        100KB</span>
                                </div>
                                <div class="col-lg-4">

                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Mobile No. for
                                            SMS/WhatsApp</label>
                                        <input class="form-control m-field" type="tel"
                                            placeholder="e.g +977xxxxxxxxxx" name="student_contact"
                                            id="student_contact">
                                    </div>
                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Date of Admission*</label>
                                        <input type="date" class="form-control m-field" id="date_of_admission"
                                            name="date_of_admission" value="{{ now() }}">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="m-div ">
                                        <label class="m-label bg-gradient-blue m-white">Date Of Birth</label>
                                        <input type="date" name="student_dob" id="student_dob"
                                            class="form-control m-field">
                                    </div>

                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Discount In Fee*</label>
                                        <input type="number" id="student_dicount" class="form-control m-field"
                                            placeholder="In %" name="student_dicount">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="m-div ">
                                        <label class="m-label bg-gradient-blue m-white">Gender</label>
                                        <select name="student_gender" id="student_gender" class="form-control m-field">
                                            <option value="">Select..</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Email*</label>
                                        <input type="email" class="form-control m-field" placeholder="Email"
                                            name="student_email" id="student_email">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="m-div ">
                                        <label class="m-label bg-gradient-blue m-white">Address</label>
                                        <input type="text" placeholder="Address" class="form-control m-field"
                                            name="student_address" id="student_address">
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="academic_info" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                                <h6 class="w-100" style="border-bottom:1px solid #999;">
                                    <div class="bg-gradient-dark m-white"
                                        style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:2px;padding-left:6px;">
                                        2</div> Academic Info <span style="font-size:12px;" class="f-right"></span>
                                </h6>
                                <div class="col-lg-4">

                                    <div class="m-div">
                                        <label class="m-label bg-gradient-gray m-white"
                                            style="margin-top:-9px;z-index:1001;">Year*</label>
                                        <select name="academic_year_id" id="academic_year_id"
                                            class="form-control m-field">
                                            <option value="">Select...</option>
                                            @foreach ($academicYears as $year)
                                                <option value='{{ $year->id }}'>{{ $year->academic_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">


                                    <div class="m-div">
                                        <label class="m-label bg-gradient-gray m-white"
                                            style="margin-top:-9px;z-index:1001;">Education Level*</label>
                                        <select name="education_level_id" id="education_level_id"
                                            class="form-control m-field">
                                            <option value="">Select...</option>

                                            @foreach ($educationLevels as $level)
                                                <option value='{{ $level->id }}'>{{ $level->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">

                                    <div class="m-div">
                                        <label class="m-label bg-gradient-gray m-white"
                                            style="margin-top:-9px;z-index:1001;">Classroom*</label>
                                        <select name="classroom_id" id="classroom_id" class="form-control m-field">
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="m-div ">
                                        <label class="m-label bg-gradient-gray m-white">Registraion Number</label>
                                        <input type="text" placeholder="Registration Number"
                                            name="registraion_number" id="registraion_number"
                                            class="form-control m-field">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="m-div ">
                                        <label class="m-label bg-gradient-gray m-white">Roll Number</label>
                                        <input type="text" placeholder="Roll Number" name="roll_number"
                                            id="roll_number" class="form-control m-field">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="m-div ">
                                        <label class="m-label bg-gradient-gray m-white">Previous School</label>
                                        <input type="text" placeholder="Previous School" name="previous_school"
                                            id="previous_school" class="form-control m-field">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                            <h6 class="w-100" style="border-bottom:1px solid #999;">
                                <div class="bg-gradient-dark m-white"
                                    style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:2px;padding-left:5px;">
                                    4</div> Guardians Information <span style="font-size:12px;"
                                    class="f-right"></span>
                            </h6>

                            <div class="guardianinfo">
                                <div class="row ">
                                    <div class="col-lg-2">
                                        <div class="m-div">
                                            <label class="m-label bg-gradient-gray m-white"
                                                style="margin-top:-9px;z-index:1001;">Relation*</label>
                                            <select name="relation[]" id="relation" class="form-control m-field">
                                                <option value="">Select Relation</option>
                                                <option value='Mother'>Mother</option>
                                                <option value='Father'>Father</option>
                                                <option value='Brother'>Brother</option>
                                                <option value='Sister'>Sister</option>
                                                <option value='Uncle'>Uncle</option>
                                                <option value='Aunty'>Aunty</option>
                                                <option value='Others'>Others</option>
                                            </select>
                                        </div>


                                    </div>
                                    <div class="col-lg-3">
                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Name</label>
                                            <input type="text" placeholder="Guardians Name" name="guardian_name[]"
                                                id="guardian_name" class="form-control m-field">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Mobile No</label>
                                            <input type="text" placeholder="Mobile No" name="contact[]"
                                                id="contact" class="form-control m-field">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Occupation</label>
                                            <input type="text" placeholder="Occupation" name="occupation[]"
                                                id="occupation" class="form-control m-field">
                                        </div>
                                    </div>

                                    <div class="col-lg-3 mt-3">
                                        <button type="button" class="btn btn-warning addMoreBtn"
                                            style="width:100px;padding:10px;border-radius:20px"><i
                                                class="fas fa-plus"></i>Add</button>
                                    </div>
                                </div>
                            </div>
                            <div class="appendGuardians">

                            </div>

                        </div>

                        <div class="row justify-content-center mt-4 mb-4">

                            <button type="button" class="btn btn-secondary"
                                style="width:100px;padding:10px;border-radius:20px"
                                data-bs-dismiss="modal">Close</button>
                            &nbsp;
                            <button type="submit" class="btn btn-success"
                                style="width:100px;padding:10px;border-radius:20px" id="createBtn">Create</button>

                            <button type="submit" class="btn btn-warning"
                                style="width:100px;padding:10px;border-radius:20px" id="updateBtn">Update</button>
                        </div>
            </form>
            <!-- Row end -->
            <!-- Row start -->

            <!-- Row end -->
        </div>
    </div>
</div>

</form>
</div>
</div>
