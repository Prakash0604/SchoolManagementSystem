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
