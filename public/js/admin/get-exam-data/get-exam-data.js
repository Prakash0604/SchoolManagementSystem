$(document).ready(function () {
    getData();

    $("#academic_year_id").on("change", function () {
        let academic_id = $(this).val();
        let dataUrl = "/admin/assign-exam-subject/get-exam/" + academic_id;
        $("#exam_id").empty();
        $("#education_level_id").empty();
        $.ajax({
            type: "get",
            url: dataUrl,
            success: function (response) {
                console.log(response);
                if (response.status == true) {
                    let exam = response.message;
                    if (response.message.length > 0) {
                        let html = `<option value="">Select one</option>`;
                        $.each(exam, function (index, data) {
                            html += `<option value="${data.id}">${data.title}</option>`;
                        });
                        $("#exam_id").html(html);
                    } else {
                        $("#exam_id").html(
                            `<option value="">No data found</option>`
                        );
                    }

                    // For Grade
                    let grade = response.grade;
                    if (response.grade.length > 0) {
                        let html = `<option value="">Select one</option>`;
                        $.each(grade, function (index, data) {
                            html += `<option value="${data.level.id}">${data.level.title}</option>`;
                        });
                        $("#education_level_id").html(html);
                    } else {
                        $("#education_level_id").html(
                            `<option value="">No data found</option>`
                        );
                    }
                }
            },
        });
    });
});

function getData() {
    if ($.fn.DataTable.isDataTable("#get-exam-detail-data")) {
        $("#get-exam-detail-data").DataTable().destroy();
    }
    $("#get-exam-detail-data").DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        autoWidth: false,
        ajax: {
            url: "get-exam-data",
            type: "Get",
            data: function (d) {
                d.exam_id = $("#exam_id").val();
                d.academic_year_id = $("#academic_year_id").val();
                d.education_level_id = $("#education_level_id").val();
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
                data: "date",
            },
            {
                data: "full_marks",
            },
            {
                data: "pass_marks",
            },
            {
                data: "start_time",
            },
            {
                data: "end_time",
            },
            {
                data: "action",
            },
        ],
    });
}

$(document).on(
    "change",
    "#exam_id,#academic_year_id,#education_level_id",
    function () {
        getData();
    }
);

$(document)
    .off("click", ".editButton")
    .on("click", ".editButton", function () {
        $("#staticBackdrop").modal("show");
        let dataId = $(this).attr("data-id");
        let dataUrl = "get-exam-data/edit/" + dataId;
        $.ajax({
            url: dataUrl,
            type: "get",
            success: function (response) {
                console.log(response);
                if (response.status == true) {
                    $("#subject_id").val(response.message.subject.id);
                    $("#subject").val(response.message.subject.title);
                    $("#date").val(response.message.date);
                    $("#full_marks").val(response.message.full_marks);
                    $("#pass_marks").val(response.message.pass_marks);
                    $("#start_at").val(response.message.start_at);
                    $("#end_at").val(response.message.end_at);
                    $("#exam_subject_id").val(response.message.id);
                }
            },
        });
    });

$(document)
    .off("submit", "#updateSubjectData")
    .on("submit", "#updateSubjectData", function (e) {
        e.preventDefault();
        let dataId = $("#exam_subject_id").val();
        console.log(dataId);
        let formdata=new FormData(this);

        let dataUrl = "get-exam-data/update/" + dataId;
        $.ajax({
            url: dataUrl,
            data:formdata,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: "POST",
            contentType: false,
            processData: false,
            success: function (response) {
                if (response.status == true) {
                    $("#staticBackdrop").modal("hide");
                    $("#get-exam-detail-data").DataTable().destroy().clear();
                    getData();
                } else {
                    $("#staticBackdrop").modal("hide");
                    Swal.fire({
                        icon: "error",
                        title: "Warning!",
                        text: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    setTimeout(() => {
                        $("#staticBackdrop").modal("show");
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
                    $("#staticBackdrop").modal("hide");
                    Swal.fire({
                        icon: "error",
                        title: "Warning!",
                        text: "Something went wrong!",
                        showConfirmButton: false,
                        timer: 3000,
                    });
                    setTimeout(() => {
                        $("#staticBackdrop").modal("show");
                    }, 3000);
                }
            },
        });
    });

    $(document)
    .off("click", ".deleteButton")
    .on("click", ".deleteButton", function () {
        let dataId = $(this).attr("data-id");
        let dataUrl = "get-exam-data/delete/" + dataId;
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
                                text: "Exam Subject been deleted.",
                            });
                            $("#get-exam-detail-data").DataTable().destroy().clear();
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