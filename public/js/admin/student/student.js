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
                            <select name="relation[]" id="relation" class="form-control m-field"
                                required>
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

        $(".guardianinfo").append(html);
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
                    url: "academic-year/status/" + id,
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
                            $("#get-year-data").DataTable().destroy().clear();
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

$(document)
    .off("click", ".editButton")
    .on("click", ".editButton", function (e) {
        let urlData = $(this).attr("data-url");
        $(".addForm").attr("id", "updateAcademicYear");
        $.ajax({
            url: urlData,
            type: "get",
            success: function (response) {
                if (response.status == true) {
                    $("#formModal").modal("show");
                    $("#createBtn").hide();
                    $("#updateBtn").show();
                    $("#sessionHeading").text("Update Session Year");

                    $("#academic_title").val(response.message.academic_title);
                    $("#starting_date").val(response.message.starting_date);
                    $("#ending_date").val(response.message.ending_date);
                    $("#academic_id").val(response.message.id);
                }
            },
        });
    });

$(document)
    .off("submit", "#updateAcademicYear")
    .on("submit", "#updateAcademicYear", function (e) {
        e.preventDefault();
        let id = $("#academic_id").val();
        let dataUrl = "/admin/academic-year/" + id;
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
                        text: "Academic Year Updated Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#formModal").modal("hide");
                    $("#updateAcademicYear").trigger("reset");
                    $("#get-year-data").DataTable().destroy().clear();
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
        let dataUrl = "/admin/academic-year/" + dataId;
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
                                text: "Academic Year has been deleted.",
                            });
                            $("#get-year-data").DataTable().destroy().clear();
                            getData();
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
