$(document).ready(function () {
    $("#fileToUpload").on("change", function (event) {
        var input = event.target;
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $("#existingImage").attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    });
    getData();

    // $("#religion_id").select2({
    //     dropdownParent: $('#formModal')
    // })
});

function getData() {
    $("#get-employee-data").DataTable({
        processing: true,
        serverSide: true,
        ajax: "employee",
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
                data: "name",
            },
            {
                data: "username",
            },
            {
                data: "role",
            },
            {
                data: "action",
            },
        ],
    });
}

function clear() {
    $("#existingImage").attr("src", "/default/avatar-5.webp");
    $(".error-message").text("");
}

$(document)
    .off("click", "#addEmployeBtn")
    .on("click", "#addEmployeBtn", function () {
        clear();
        $("#formModal").modal("show");
        $("#employeeHeading").text("Add Employee");
        $(".addForm").attr("id", "storeUser");
        $("#storeUser")[0].reset();
        $("#createBtn").show();
        $("#updateBtn").hide();
    });

$(document).on("click", "#imageChoose", function (e) {
    e.preventDefault();
    $("#fileToUpload").trigger("click");
});

$(document)
    .off("submit", "#storeUser")
    .on("submit", "#storeUser", function (e) {
        e.preventDefault();
        let formdata = new FormData(this);
        $("#createBtn").prop("disabled", true);
        $.ajax({
            type: "post",
            url: "employee",
            data: formdata,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status == true) {
                    console.log(response);
                    Swal.fire({
                        icon: "success",
                        title: "Created!",
                        text: "Employee Created Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#formModal").modal("hide");
                    $("#storeUser")[0].reset();
                    $("#get-employee-data").DataTable().destroy().clear();
                    getData();
                } else {
                    $("#formModal").modal("hide");

                    if (response.status == 404) {
                        Swal.fire({
                            title: "Are you sure?",
                            text: "You will be redirected!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonColor: "#3085d6",
                            cancelButtonColor: "#d33",
                            confirmButtonText: "Create Institute",
                            cancelButtonText: "Cancel",
                            timer: 3000,
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = "/admin/institute-info";
                            }
                        });

                        setTimeout(() => {
                            $("#formModal").modal("show");
                        }, 3000);
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
                }
            },
            error: function (xhr) {
                if (xhr.status == 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function (data, message) {
                        $("#" + data + "-error").text(message[0]);
                    });
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
            complete: function () {
                $("#createBtn").prop("disabled", false);
            },
        });
    });

$(document)
    .off("click", ".editButton")
    .on("click", ".editButton", function () {
        $("#employeeHeading").text("Update Employee");
        $("#createBtn").hide();
        $("#updateBtn").show();
        $(".addForm").attr("id", "updateEmpoyee");
        let dataId = $(this).attr("data-id");
        let dataUrl = "/admin/employee/" + dataId + "/edit";
        $.ajax({
            url: dataUrl,
            type: "get",
            success: function (response) {
                if (response.status == true) {
                    console.log(response);
                    $("#formModal").modal("show");
                    if (response.message.image != null) {
                        $("#existingImage").attr(
                            "src",
                            "/storage/" + response.message.image
                        );
                    } else {
                        $("#existingImage").attr(
                            "src",
                            "/default/avatar-5.webp"
                        );
                    }

                    $("#employeeName").val(response.message.name);
                    $("#contact").val(response.message.contact);
                    $("#join_date").val(response.message.join_date);
                    $("#role_id").val(response.message.role_id);
                    $("#monthly_salary").val(response.message.monthly_salary);
                    $("#guardains").val(response.message.guardains);
                    $("#national_id").val(response.message.national_id);
                    $("#education").val(response.message.education);
                    $("#gender").val(response.message.gender);
                    $("#religion_id").val(response.message.religion_id);
                    $("#blood_group_id").val(response.message.blood_group_id);
                    $("#experience").val(response.message.experience);
                    $("#email").val(response.message.email);
                    $("#dob").val(response.message.dob);
                    $("#home_address").val(response.message.home_address);
                    $("#user_id").val(response.message.id);
                }
            },
            error: function (xhr) {
                console.log(xhr);
            },
        });
    });

$(document)
    .off("submit", "#updateEmpoyee")
    .on("submit", "#updateEmpoyee", function (e) {
        e.preventDefault();
        let formdata = new FormData(this);
        formdata.append("_method", "put");
        let dataId = $("#user_id").val();
        let dataUrl = "/admin/employee/" + dataId;
        $("#updateBtn").prop("disabled", true);
        $.ajax({
            type: "post",
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content"),
            },
            url: dataUrl,
            data: formdata,
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status == true) {
                    console.log(response);
                    Swal.fire({
                        icon: "success",
                        title: "Update!",
                        text: "Employee updated Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#formModal").modal("hide");
                    $("#updateEmpoyee")[0].reset();
                    $("#get-employee-data").DataTable().destroy().clear();
                    getData();
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Warning!",
                        text: "Something went wrong!",
                    });
                }
            },
            error: function (xhr) {
                if (xhr.status == 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function (data, message) {
                        $("#" + data + "-error").text(message[0]);
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Warning!",
                        text: "Something went wrong!",
                    });
                }
            },
            complete: function () {
                $("#updateBtn").prop("disabled", false);
            },
        });
    });

$(document)
    .off("click", ".deleteButton")
    .on("click", ".deleteButton", function () {
        let dataId = $(this).attr("data-id");
        let dataUrl = "/admin/employee/" + dataId;
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
                                text: "Employee has been deleted.",
                            });
                            $("#get-employee-data")
                                .DataTable()
                                .destroy()
                                .clear();
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

$(".toggle-password").on("click", function () {
    const input = $(this).siblings("input");
    const type = input.attr("type") === "password" ? "text" : "password";
    input.attr("type", type);

    $(this).html(
        type === "password"
            ? '<i class="fa-regular fa-eye"></i>'
            : '<i class="fa-regular fa-eye-slash"></i>'
    );
});
$(document)
    .off("click", ".resetPasswordBtn")
    .on("click", ".resetPasswordBtn", function () {
        // $("password").val("");
        clear();
        let dataId = $(this).attr("data-id");
        $("#reset_id").val(dataId);
        // $("#new_password").val("");
        // $("#confirm_password").val("");
        $("#resetModal").modal("show");
        $(".resetForm").attr("id", "resetPassword");
        $("#resetPassword")[0].reset();
    });

$(document)
    .off("submit", "#resetPassword")
    .on("submit", "#resetPassword", function (e) {
        e.preventDefault();
        // const new_password=$("#new_password").val();
        // const confirm_password=$("#confirm_password").val();
        // console.log(new_password,confirm_password);
        let formdata = new FormData(this);
        let dataId = $("#reset_id").val();
        let dataUrl = "/admin/employee/reset-password/" + dataId;
        $.ajax({
            headers: {
                "X-CSRF-TOKEN": $("meta[name='csrf-token']").attr("content"),
            },
            type: "post",
            url: dataUrl,
            data: formdata,
            //  {
            //     "new_password":new_password,
            //     "confirm_password":confirm_password,
            // },
            processData: false,
            contentType: false,
            success: function (response) {
                if (response.status == true) {
                    Swal.fire({
                        icon: "success",
                        title: "Reset",
                        text: "Password reset successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#resetModal").modal("hide");
                    $("#get-employee-data").DataTable().destroy().clear();
                    getData();
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Warning",
                        text: "Something went wrong!",
                    });
                    $("#resetModal").modal("hide");
                }
            },
            error: function (xhr) {
                if (xhr.status == 422) {
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function (data, message) {
                        $("#" + data + "-error").text(message[0]);
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Warning",
                        text: "Something went wrong!",
                    });
                    $("#resetModal").modal("hide");
                }
            },
        });
    });
