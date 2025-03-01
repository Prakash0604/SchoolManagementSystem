$(document).ready(function () {
    getData();
});

function getData() {
    if ($.fn.DataTable.isDataTable("#get-assign-subject-data")) {
        $("#get-assign-subject-data").DataTable().destroy();
    }
    $("#get-assign-subject-data").DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/admin/assign-subject/view/list",
            type: "Get",
            data: function (d) {
                d.academicYear = $("#academic_year_id").val();
                d.educationLevel = $("#education_level_id").val();
            },
        },
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
                data: "subject",
            },
            {
                data: "full_marks",
            },
            {
                data: "pass_marks",
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
$(document).on("change", "#academic_year_id,#education_level_id", function () {
    getData();
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
                    url: "/admin/assign-subject/view/list/status/" + id,
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
        $(".addForm").attr("id", "updateAssignSubject");
        $.ajax({
            url: urlData,
            type: "get",
            success: function (response) {
                console.log(response);

                if (response.status == true) {
                    $("#formModal").modal("show");

                    $("#year_id").text(response.message.year.academic_title);
                    $("#level_id").text(response.message.level.title);
                    $("#subject_id").text(response.message.subject.title);
                    $("#assign_subject_id").val(response.message.id);
                    $("#full_marks").val(response.message.full_marks);
                    $("#pass_marks").val(response.message.pass_marks);
                }
            },
        });
    });

$(document)
    .off("submit", "#updateAssignSubject")
    .on("submit", "#updateAssignSubject", function (e) {
        e.preventDefault();
        let id = $("#assign_subject_id").val();
        let dataUrl = "/admin/assign-subject/" + id;
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
                        text: "Marks Updated Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#formModal").modal("hide");
                    $("#updateAssignSubject").trigger("reset");
                    $("#get-assign-subject-data").DataTable().destroy().clear();
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

                if (response.status == 211) {
                    Swal.fire({
                        icon: "error",
                        title: "Warning!",
                        text: response.message,
                        showConfirmButton: false,
                        timer: 3000,
                    });
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
        let dataUrl = "/admin/assign-subject/" + dataId;
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
                                text: "Grade Subject has been deleted.",
                            });
                            $("#get-assign-subject-data")
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
