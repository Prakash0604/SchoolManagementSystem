$(document).ready(function () {
    getData();
});

function getData() {
    $("#get-student-data").DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        autoWidth: false,
        ajax: "student",
        columnDefs: [
            {
                targets: "_all",
                className: "text-center align-middle",
            },
        ],
        columns: [
            {
                data: "DT_RowIndex",
            },
            {
                data: "image",
            },
            {
                data: "student_name",
            },
            {
                data: "username",
            },
            {
                data: "student_contact",
            },
            {
                data: "academic_year",
            },
            {
                data: "education_level",
            },
            {
                data: "classroom",
            },
            {
                data: "status",
            },
            {
                data: "action",
            },
        ],
    });
}

$(document)
    .off("click", "#addStudentBtn")
    .on("click", "#addStudentBtn", function () {
        $("#formModal").modal("show");
        $("#academic_info").removeClass("d-none");
        $(".appendGuardians").html("");
        $(".appendImage").html("");

        $("#createBtn").show();
        $("#updateBtn").hide();
        $(".addForm").attr("id", "storeStudent");
        $("#storeStudent").trigger("reset");
    });

// $(document).on("change", "#starting_date", function () {
//     let min = $(this).val();
//     $("#ending_date").attr("min", min);
// });
// $(document).on("change", "#ending_date", function () {
//     let max = $(this).val();
//     $("#starting_date").attr("max", max);
// });

$(document)
    .off("click", ".addMoreBtn")
    .on("click", ".addMoreBtn", function () {
        let html = `<div class="row ">
                <div class="col-lg-2">
                            <div class="m-div">
                            <label class="m-label bg-gradient-gray m-white"
                                style="margin-top:-9px;z-index:1001;">Relation*</label>
                            <select name="relation[]" id="relation" class="form-control m-field">
                                <option value=''>Select Relation</option>
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
                              style="width:100px;padding:10px;border-radius:20px"><i class="fas fa-plus"></i>Add</button>
                          <button type="button" class="btn btn-danger removeBtn"
                              style="width:100px;padding:10px;border-radius:20px"><i class="fas fa-minus"></i>Delete</button>
                    </div>
            </div>`;

        $(".appendGuardians").append(html);
    });

$(document)
    .off("click", ".removeBtn")
    .on("click", ".removeBtn", function () {
        $(this).closest(".row").remove();
    });

$(document)
    .off("submit", "#storeStudent")
    .on("submit", "#storeStudent", function (e) {
        e.preventDefault();
        let formdata = new FormData(this);
        let dataUrl = "/admin/student";
        $.ajax({
            url: dataUrl,
            type: "post",
            data: formdata,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status == true) {
                    Swal.fire({
                        icon: "success",
                        title: "Created",
                        text: "Student Created Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#storeStudent").trigger("reset");
                    $("#formModal").modal("hide");
                    $(".appendGuardians").empty();
                    $("#get-student-data").DataTable().destroy().clear();
                    getData();
                } else {
                    $("#formModal").modal("hide");
                    Swal.fire({
                        icon: "error",
                        title: "Warning!",
                        text: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 2000,
                    });
                    setTimeout(() => {
                        $("#formModal").modal("show");
                    }, 2000);
                }
            },
            error: function (xhr) {
                if (xhr.status == 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function (data, message) {
                        $("#" + data + "-error").text(message[0]);
                    });
                    setTimeout(() => {
                        $(".error-message").text("");
                    }, 3000);
                } else {
                    $("#formModal").modal("hide");
                    Swal.fire({
                        icon: "error",
                        title: "Warning!",
                        text: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    setTimeout(() => {
                        $("#formModal").modal("show");
                    }, 3000);
                }
            },
        });
    });

$(document)
    .off("click", ".statusToggle")
    .on("click", ".statusToggle", function (e) {
        let id = $(this).attr("data-id");
        let checked = $(this);
        checked.prop("disabled", true);
        Swal.fire({
            icon: "warning",
            title: "Are you sure ?",
            text: "You wan't to change status!",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Yes, Change it!",
            cancelButtonColor: "#d33",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "student/status/" + id,
                    type: "get",
                    success: function (res) {
                        if (res.status == true) {
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: "Status Changed Successfully!",
                                showConfirmButton: false,
                                timer: 1000,
                            });
                            checked.prop("disabled", false);
                            $("#get-student-data")
                                .DataTable()
                                .destroy()
                                .clear();
                            getData();
                        } else {
                            Swal.fire({
                                icon: "warning",
                                title: "Warning!",
                                text: "Something went wrong!",
                            });
                            checked.prop("disabled", false);
                        }
                    },
                    error: function (xhr) {
                        console.log(xhr);
                        Swal.fire({
                            icon: "warning",
                            title: "Warning!",
                            text: "Something went wrong!",
                        });
                        checked.prop("disabled", false);
                    },
                    complete: function () {
                        checked.prop("disabled", false);
                    },
                });
            } else {
                checked.prop("disabled", false);
                checked.prop("checked", !checked.prop("checked"));
            }
        });
    });

    $(document).on("change", "#academic_year_id,#education_level_id", function () {
        let academic_year_id = $("#academic_year_id").val();
        let education_level_id = $("#education_level_id").val();
        $("#classroom_id").empty();
        if (academic_year_id && education_level_id) {
            $.ajax({
                type: "Get",
                url: "/admin/student/classroom/get",
                data: {
                    academic_year_id,
                    education_level_id,
                },
                success: function (response) {
                    if (response.status == true) {
                        console.log(response);
                        let html = `<option value="">Select..</option>`;
                        let rooms = response.message;
                        $.each(rooms, function (index, data) {
                            html += `<option value="${data.id}">${data.class_title}</option>`;
                        });

                        $("#classroom_id").html(html);
                    }
                },
            });
        }
    });

$(document)
    .off("click", ".editButton")
    .on("click", ".editButton", function (e) {
        let id = $(this).attr("data-id");
        let urlData = "/admin/student/"+id+"/edit";
        $(".addForm").attr("id", "updateStudent");
        $.ajax({
            url: urlData,
            type: "get",
            success: function (response) {
                console.log(response);

                if (response.status == true) {
                    $("#academic_info").addClass("d-none");
                    $("#formModal").modal("show");
                    $("#createBtn").hide();
                    $("#updateBtn").show();

                    if (response.message.student_image != null) {
                        let image = response.message.student_image;
                        $(".appendImage").html(
                            `<img src="/storage/${image}" class="img-fluid"  alt=""  width="100"  height="100" />`
                        );
                    }
                    $("#student_name").val(response.message.student_name);
                    $("#student_contact").val(response.message.student_contact);
                    $("#date_of_admission").val(
                        response.message.date_of_admission
                    );
                    $("#student_dob").val(response.message.student_dob);
                    $("#student_dicount").val(response.message.student_dicount);
                    $("#student_gender").val(response.message.student_gender);
                    $("#student_email").val(response.message.student_email);
                    $("#student_address").val(response.message.student_address);
                    $("#student_id").val(response.message.id);
                    $("#academic_year_id").val(
                        response.message.academic_data.academic_year_id
                    );
                    $("#education_level_id").val(
                        response.message.academic_data.education_level_id
                    );
                    $("#classroom_id").val(
                        response.message.academic_data.classroom_id
                    );
                    $("#registraion_number").val(
                        response.message.academic_data.registraion_number
                    );
                    $("#roll_number").val(
                        response.message.academic_data.roll_number
                    );
                    $("#previous_school").val(response.message.previous_school);
                    let members = response.message.student_member;
                    let container = $(".appendGuardians");
                    container.html("");

                    $.each(members, function (index, data) {
                        let html = `<div class="row memberRow">
                            <div class="col-lg-2">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-gray m-white" style="margin-top:-9px;z-index:1001;">Relation*</label>
                                    <select name="relation[]" class="form-control m-field" required>
                                        <option value="Mother" ${
                                            data.relation === "Mother"
                                                ? "selected"
                                                : ""
                                        }>Mother</option>
                                        <option value="Father" ${
                                            data.relation === "Father"
                                                ? "selected"
                                                : ""
                                        }>Father</option>
                                        <option value="Brother" ${
                                            data.relation === "Brother"
                                                ? "selected"
                                                : ""
                                        }>Brother</option>
                                        <option value="Sister" ${
                                            data.relation === "Sister"
                                                ? "selected"
                                                : ""
                                        }>Sister</option>
                                        <option value="Uncle" ${
                                            data.relation === "Uncle"
                                                ? "selected"
                                                : ""
                                        }>Uncle</option>
                                        <option value="Aunty" ${
                                            data.relation === "Aunty"
                                                ? "selected"
                                                : ""
                                        }>Aunty</option>
                                        <option value="Others" ${
                                            data.relation === "Others"
                                                ? "selected"
                                                : ""
                                        }>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-gray m-white">Name</label>
                                    <input type="text" placeholder="Guardian's Name" name="guardian_name[]" class="form-control m-field" value="${
                                        data.guardian_name
                                    }">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-gray m-white">Mobile No</label>
                                    <input type="text" placeholder="Mobile No" name="contact[]" class="form-control m-field" value="${
                                        data.contact
                                    }">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="m-div">
                                    <label class="m-label bg-gradient-gray m-white">Occupation</label>
                                    <input type="text" placeholder="Occupation" name="occupation[]" class="form-control m-field" value="${
                                        data.occupation || ""
                                    }">
                                </div>
                            </div>
                            <div class="col-lg-3 mt-3">
                                <button type="button" class="btn btn-warning addMoreBtn" style="width:100px;padding:10px;border-radius:20px">
                                    <i class="fas fa-plus"></i> Add
                                </button>
                                <button type="button" class="btn btn-danger removeBtn editGuardianRemove" data-id="${
                                    data.id
                                }" style="width:100px;padding:10px;border-radius:20px">
                                    <i class="fas fa-minus"></i> Delete
                                </button>
                            </div>
                        </div>`;

                        container.append(html);
                    });
                }
            },
        });
    });

$(document)
    .off("click", ".editGuardianRemove")
    .on("click", ".editGuardianRemove", function () {
        let id = $(this).attr("data-id");
        console.log(id);
        let dataUrl = "student/guardians/remove/" + id;
        $.ajax({
            type: "get",
            url: dataUrl,
            success: function (response) {
                if (response.status == true) {
                    $("#get-student-data").DataTable().destroy().clear();
                    getData();
                } else {
                    $("#formModal").modal("hide");
                    Swal.fire({
                        icon: "warning",
                        title: "Warning",
                        text: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 2000,
                    });
                    setTimeout(() => {
                        $("#formModal").modal("show");
                    }, 2000);
                }
            },
        });
    });

$(document)
    .off("submit", "#updateStudent")
    .on("submit", "#updateStudent", function (e) {
        e.preventDefault();
        let id = $("#student_id").val();
        let dataUrl = "/admin/student/" + id;
        let formdata = new FormData(this);
        formdata.append("_method", "PUT");
        $.ajax({
            type: "post",
            url: dataUrl,
            data: formdata,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status == true) {
                    Swal.fire({
                        icon: "success",
                        title: "Updated!",
                        text: "Student Updated Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#formModal").modal("hide");
                    $("#updateStudent").trigger("reset");
                    $("#get-student-data").DataTable().destroy().clear();
                    getData();
                } else {
                    $("#formModal").modal("hide");
                    Swal.fire({
                        icon: "error",
                        title: "Warning!",
                        text: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    setTimeout(() => {
                        $("#formModal").modal("show");
                    }, 3000);
                }
            },
            error: function (xhr) {
                if (xhr.status == 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function (data, message) {
                        $("#" + data + "-error").text(message[0]);
                    });
                    setTimeout(() => {
                        $(".error-message").text("");
                    }, 3000);
                }
            },
        });
    });

$(document)
    .off("click", ".deleteButton")
    .on("click", ".deleteButton", function () {
        let dataId = $(this).attr("data-id");
        let dataUrl = "/admin/student/" + dataId;
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: dataUrl,
                    headers: {
                        "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr(
                            "content"
                        ),
                    },
                    type: "DELETE",
                    success: function (response) {
                        if (response.status == true) {
                            Swal.fire({
                                icon: "success",
                                title: "Deleted!",
                                text: "Student has been deleted.",
                            });
                            $("#get-student-data")
                                .DataTable()
                                .destroy()
                                .clear();
                            getData();
                        } else if (response.status == 219) {
                            Swal.fire({
                                icon: "warning",
                                title: "Warning!",
                                text: response.message,
                            });
                        } else {
                            Swal.fire({
                                icon: "warning",
                                title: "Warning!",
                                text: "Something went wrong!.",
                            });
                        }
                    },
                });
            }
        });
    });
