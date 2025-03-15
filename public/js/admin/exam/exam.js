$(document).ready(function () {
    getData();
});

function getData() {
    $("#get-exam-data").DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        autoWidth: false,
        ajax: "exam",
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
                data: "title",
            },
            {
                data: "start_date",
            },
            {
                data: "end_date",
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
    .off("click", "#addExamBtn")
    .on("click", "#addExamBtn", function () {
        $("#formModal").modal("show");
        $("#createBtn").show();
        $("#updateBtn").hide();
        $(".addForm").attr("id", "storeExam");
        $("#storeExam").trigger("reset");
    });

$(document).on("change", "#start_date", function () {
    let min = $(this).val();
    $("#end_date").attr("min", min);
});
$(document).on("change", "#end_date", function () {
    let max = $(this).val();
    $("#start_date").attr("max", max);
});

$(document)
    .off("submit", "#storeExam")
    .on("submit", "#storeExam", function (e) {
        e.preventDefault();
        let formdata = new FormData(this);
        let dataUrl = "/admin/exam";
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
                        text: "Exam Created Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#storeExam").trigger("reset");
                    $("#formModal").modal("hide");
                    $("#get-exam-data").DataTable().destroy().clear();
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
                    url: "exam/status/" + id,
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
                            $("#get-exam-data").DataTable().destroy().clear();
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
        $(".addForm").attr("id", "updateExam");
        $.ajax({
            url: urlData,
            type: "get",
            success: function (response) {
                if (response.status == true) {
                    $("#formModal").modal("show");
                    $("#createBtn").hide();
                    $("#updateBtn").show();

                    $("#title").val(response.message.title);
                    $("#academic_year_id").val(
                        response.message.academic_year_id
                    );
                    $("#start_date").val(response.message.start_date);
                    $("#end_date").val(response.message.end_date);
                    $("#description").val(response.message.description);
                    $("#publish_date").val(response.message.publish_date);
                    $("#exam_id").val(response.message.id);
                }
            },
        });
    });

$(document)
    .off("submit", "#updateExam")
    .on("submit", "#updateExam", function (e) {
        e.preventDefault();
        let id = $("#exam_id").val();
        let dataUrl = "/admin/exam/" + id;
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
                        text: "Exam Updated Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#formModal").modal("hide");
                    $("#updateExam").trigger("reset");
                    $("#get-exam-data").DataTable().destroy().clear();
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
        let dataUrl = "/admin/exam/" + dataId;
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
                                text: "Exam has been deleted.",
                            });
                            $("#get-exam-data").DataTable().destroy().clear();
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
