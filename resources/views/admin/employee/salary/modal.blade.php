<div class="modal fade" id="formModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="modalLabel" aria-hidden="false">
    <style>
        .text-blue {
            color: #3144de;
            text-align: left;
            margin: 0px;
            border: none;
            box-shadow: none;
            padding: 0px;
            background: none;
        }
    </style>
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel">Assign Salary</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="col-md-10 col-xl-12"
                    style="border-radius:10px;background:#fff;box-shadow:0px 0px 1px 0px gray;padding:30px;">
                    <h4 class="f-20 text-center text-gray" style="line-height:16px;">Pay Employee Salary<br>
                        <div class="bg-gradient-blue"
                            style="width:15px;height:6px;border-radius:10px;display:inline-block;"></div>
                        <span class="f-10 m-dblue" style="display:inline-block;font-weight:100;">Required*</span>
                        <div class="bg-gradient-gray m-l-10"
                            style="width:20px;height:7px;border-radius:10px;display:inline-block;"></div>
                        <span class="f-12 gradient-gray" style="display:inline-block;font-weight:100;">Optional</span>
                    </h4>
                    <form id="myform" class="salaryForm">
                        @csrf
                        <div class="row mt-4 mb-4">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <h3 class="text-center">Employee</h3>
                                <select class="form-select " name="user_id" id="user_id">
                                    <option selected value="">-------Select one----------</option>
                                    @foreach ($employees as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span id="user_id-error" class="text-danger text-center error-message"></span>
                            <div class="col-md-4"></div>
                        </div>
                        <div class="row text-left p-t-20 ">

                            <div class="col-lg-4">
                                <div style="position:relative;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:20px;height:16px;">
                                    <span class="f-12 m-gray" style="border-bottom:1.5px solid #999;">Employee
                                        ID</span><br>
                                    <strong class="f-14 m-l-20"><input type="text" id="employeeID" name="user_name"
                                            class="text-blue"></strong>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div style="position:relative;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:20px;height:16px;">
                                    <span class="f-12 m-gray" style="border-bottom:1.5px solid #999;">Employee
                                        Role</span><br>
                                    <strong class="f-14 m-l-20"><input type="text" id="employeeRole" name="class"
                                            class="text-blue"></strong>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div style="position:relative;" class="">
                                    <img src="{{ asset('assets/arrow-down.png') }}"
                                        style="position:absolute;left:0px;top:20px;height:16px;">
                                    <span class="f-12 m-gray" style="border-bottom:1.5px solid #999;">Employee
                                        Name</span><br>
                                    <strong class="f-14 m-l-20"><input type="text" id="employeeName" name="sname"
                                            class="text-blue"></strong>
                                </div>
                            </div>
                        </div>
                        <div class="row text-left m-t-10">
                            <div class="col-lg-6">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-blue m-white">Salary Month*</label>
                                    <input type="month" class="form-control m-field" name="salary_month"
                                        id="salary_month">
                                </div>
                                <span id="salary_month-error" class="text-danger error-message"></span>
                            </div>

                            <div class="col-lg-6">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-blue m-white">Date*</label>
                                    <input type="date" class="form-control m-field" value="{{ date('Y-m-d') }}"
                                        name="salary_date" id="salary_date">
                                </div>
                                <span id="salary_date-error" class="text-danger error-message"></span>
                            </div>

                        </div>
                        <div class="row text-left m-t-10">
                            <div class="col-lg-4">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-blue m-white">Fixed Salary*</label>
                                    <input type="number" class="form-control m-field" name="net_salary"
                                        id="net_salary">
                                </div>
                                <span id="net_salary-error" class="text-danger error-message"></span>
                            </div>

                            <div class="col-lg-4">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-gray m-white">Any Bouns</label>
                                    <input type="number" class="form-control m-field" placeholder="Bouns amount"
                                        name="bonus">
                                </div>
                                <span id="bonus-error" class="text-danger error-message"></span>
                            </div>
                            <div class="col-lg-4">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-gray m-white">Any Deduction</label>
                                    <input type="number" class="form-control m-field" placeholder="Deduction amount"
                                        name="fine">
                                </div>
                                <span id="fine-error" class="text-danger error-message"></span>
                            </div>

                        </div>
                        <p class="text-center m-t-40">
                            <button type="button" class="btn btn-secondary"
                                style="width:100px;padding:10px;border-radius:20px"
                                data-bs-dismiss="modal">Close</button>
                            <button type="submit" id="submitBtn" class="btn bg-c-yellow"
                                style="border-radius:25px;"><i class="fa-solid fa-check"></i> Submit
                                Salary</button>
                            <button type="submit" id="updateBtn" class="btn bg-c-yellow"
                                style="border-radius:25px;"><i class="fa-solid fa-check"></i> Update
                                Salary</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
