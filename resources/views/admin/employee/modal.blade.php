<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <form id="addForm" class="addForm">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Employee Form</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="page-wrapper">


                            <!-- Page-body start -->
                            <div class="page-body">
                                <!-- Row start -->
                                <div class="row">

                                    <h3 class="text-center m-t-20 w-100" id="employeeHeading" style="line-height:20px;">
                                        Add Employee
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
                                    <form action="editqueries.php" method="post" enctype="multipart/form-data"
                                        id="myform">
                                </div>



                                <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                                    <h6 class="w-100" style="border-bottom:1px solid #999;">
                                        <div class="bg-gradient-dark m-white"
                                            style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:3px;padding-left:7px;">
                                            1</div> Basic Information <span style="font-size:12px;"
                                            class="f-right"></span>
                                    </h6>
                                    <div class="col-lg-4">
                                        <input type="hidden" name="id" id="user_id">
                                        <div class="m-div">
                                            <label class="m-label bg-gradient-gray m-white">Picture - Optional</label>
                                            <img id="existingImage" src="{{ asset('default/avatar-5.webp') }}"
                                                class="img-circle m-10" style="width:120px; height:120px;">
                                            <input type="file" accept="image/*"
                                                class="form-control m-field hide_field" name="image"
                                                id="fileToUpload">
                                            <span class="btn btn-sm bg-gradient-blue m-white"
                                                style="display:inline-block;border-radius:20px;" id="imageChoose"> <i
                                                    class="ti-image"></i> Choose Image</span>
                                        </div>
                                        <span class="bg-c-yellow m-round m-t-0 m-l-10"
                                            style="font-size:10px;padding-left:5px; padding-right:5px;">Max size
                                            300KB</span>

                                    </div>

                                    <div class="col-lg-4">
                                        <div class="m-div">
                                            <label class="m-label bg-gradient-blue m-white">Employee Name*</label>
                                            <input type="text" class="form-control m-field"
                                                placeholder="Name of Employee" name="name" id="employeeName">
                                        </div>
                                        @csrf
                                        <span id="name-error" class="text-danger error-message"></span>
                                        <div class="m-div">
                                            <label class="m-label bg-gradient-gray m-white">Mobile No for
                                                SMS/WhatsApp</label>
                                            <input type="text" placeholder="e.g +977xxxxxxxxxx"
                                                class="form-control m-field" name="contact" id="contact">
                                        </div>
                                        <span id="contact-error" class="text-danger error-message"></span>

                                        <div class="m-div">
                                            <label class="m-label bg-gradient-blue m-white">Date of Joining*</label>
                                            <input type="date" class="form-control m-field" id="join_date"
                                                name="join_date">
                                        </div>
                                        <span id="join_date-error" class="text-danger error-message"></span>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="m-div">
                                            <label class="m-label bg-gradient-blue m-white">Employee Role*</label>
                                            <select name="role_id" id="role_id" class="form-control m-field">
                                                @foreach ($roles as $role)
                                                    <option value="{{ $role->id }}">{{ $role->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span id="role_id-error" class="text-danger error-message"></span>

                                        <div class="m-div">
                                            <label class="m-label bg-gradient-blue m-white">Monthly Salary*</label>
                                            <input type="number" class="form-control m-field"
                                                placeholder="Monthly Salary" name="monthly_salary"
                                                id="monthly_salary">
                                        </div>
                                        <span id="monthly_salary-error" class="text-danger error-message"></span>

                                        <span style="display:none;">
                                            <input type="checkbox" class="m-t-10" name="profile" value="V">
                                            <font style="font-size:12px;"> Show profile on website</font>
                                        </span>

                                    </div>
                                </div>
                                <div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
                                    <h6 class="w-100" style="border-bottom:1px solid #999;">
                                        <div class="bg-gradient-dark m-white"
                                            style="width:20px;height:20px;border-radius:10px;display:inline-block;padding-top:2px;padding-left:6px;">
                                            2</div> Other Information <span style="font-size:12px;"
                                            class="f-right"></span>
                                    </h6>
                                    <div class="col-lg-4">
                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Father / Husband
                                                Name</label>
                                            <input type="text" class="form-control m-field"
                                                placeholder="Father / Husband Name" value="" name="guardains"
                                                id="guardains">
                                        </div>
                                        <span id="guardains-error" class="text-danger error-message"></span>

                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">National ID</label>
                                            <input type="text" class="form-control m-field"
                                                placeholder="National ID" value="" name="national_id"
                                                id="national_id">
                                        </div>
                                        <span id="national_id-error" class="text-danger error-message"></span>

                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Education</label>
                                            <input type="text" class="form-control m-field"
                                                placeholder="Education" value="" name="education"
                                                id="education">
                                        </div>
                                        <span id="education-error" class="text-danger error-message"></span>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-blue m-white">Gender</label>
                                            <select name="gender" id="gender" class="form-control m-field">
                                                <option value="">Select</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="others">Others</option>
                                            </select>
                                        </div>
                                        <span id="gender-error" class="text-danger error-message"></span>

                                        <div class="m-div p-t-0 p-b-0 ">
                                            <label class="m-label bg-gradient-gray m-white"
                                                style="margin-top:-9px;z-index:2;">Religion</label>
                                            <select name="religion_id" id="religion_id" class="form-control m-field">
                                                <option value="">Select</option>
                                                @foreach ($religions as $religion)
                                                    <option value="{{ $religion->id }}">{{ $religion->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span id="religion_id-error" class="text-danger error-message"></span>

                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Blood Group</label>
                                            <select name="blood_group_id" id="blood_group_id"
                                                class="form-control m-field">
                                                <option value="">Select</option>
                                                @foreach ($bloodgroups as $blood)
                                                    <option value="{{ $blood->id }}">{{ $blood->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span id="blood_group_id-error" class="text-danger error-message"></span>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Experience</label>
                                            <input type="text" class="form-control m-field"
                                                placeholder="Experience" value="" name="experience"
                                                id="experience">
                                        </div>
                                        <span id="experience-error" class="text-danger error-message"></span>

                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Email Address</label>
                                            <input type="email" class="form-control m-field"
                                                placeholder="Email Address" value="" name="email"
                                                id="email">
                                        </div>
                                        <span id="email-error" class="text-danger error-message"></span>

                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-blue m-white">Date of Birth</label>
                                            <input class="form-control m-field" type="date" name="dob"
                                                id="dob" value="">
                                        </div>
                                        <span id="dob-error" class="text-danger error-message"></span>

                                    </div>
                                    <div class="col-lg-8">
                                        <div class="m-div ">
                                            <label class="m-label bg-gradient-gray m-white">Home Address</label>
                                            <input type="text" placeholder="Home Address"
                                                class="form-control m-field" value="" name="home_address"
                                                id="home_address">
                                        </div>
                                        <span id="home_address-error" class="text-danger error-message"></span>

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

<div class="modal fade" id="resetModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="addForm" class="resetForm">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Reset Password</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="page-wrapper">

                            {{-- <div class="m-div">
                                <label class="m-label bg-gradient-blue m-white">Monthly Salary*</label>
                                <input type="password" class="form-control m-field"
                                    placeholder="Monthly Salary" name="monthly_salary" id="monthly_salary">
                            </div>
                            <span id="monthly_salary-error" class="text-danger error-message"></span> --}}

                            <input type="hidden" name="reset_id" id="reset_id">

                            <div class="m-div mb-4 mt-4" style="border-top:none;border-right:none;margin-top:0px;">
                                <label class="m-label bg-gradient-blue m-white"
                                    style="padding-left:3px;padding-right:3px;"><i class="fas fa-lock"></i></label>
                                <span class="toggle-password m-label" id="toggle-p140518"
                                    style="margin-left:350px;border:none;font-size:14px;font-weight:900;color:#000;margin-top:-16px;cursor:pointer;">
                                    <i class="fa-sharp-duotone fa-solid fa-eye"></i>
                                </span>
                                <input type="password" id="new_password" placeholder="Password" name="new_password"
                                    class="m-field form-control">
                                </div>
                                <span id="new_password-error" class="text-danger error-message"></span>

                            <div class="m-div mt-4 mb-4" style="border-top:none;border-right:none;margin-top:0px;">
                                <label class="m-label bg-gradient-blue m-white"
                                    style="padding-left:3px;padding-right:3px;"><i class="fas fa-lock"></i></label>
                                <span class="toggle-password m-label" id="toggle-p140518"
                                    style="margin-left:350px;border:none;font-size:14px;font-weight:900;color:#000;margin-top:-16px;cursor:pointer;">
                                    <i class="fa-sharp-duotone fa-solid fa-eye"></i>
                                </span>
                                <input type="password" id="confirm_password"  placeholder="Confirm Password"  name="confirm_password"
                                    class="m-field form-control">
                            </div>
                            <span id="confirm_password-error" class="text-danger error-message "></span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        style="width:100px;padding:10px;border-radius:20px" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger"
                        style="width:160px;padding:10px;border-radius:20px" id="resetBtn">Reset Password</button>
                </div>
            </form>
        </div>
    </div>
</div>
