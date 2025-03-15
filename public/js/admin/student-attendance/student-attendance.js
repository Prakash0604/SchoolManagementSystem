$(document).ready(function () {
    getData();
});

function getData() {
    if ($.fn.DataTable.isDataTable("#get-attendance-data")) {
        $("#get-attendance-data").DataTable().destroy();
    }
    $("#get-attendance-data").DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        autoWidth: false,
        ajax: {
            url: "student-attendance",
            type: "Get",
            data: function (d) {
                d.filter_start_date = $("#starting_date").val();
                d.filter_end_date = $("#ending_date").val();
                d.year_id = $("#year_id").val();
                d.education_level_id = $("#level_id").val();
                d.classroom_id = $("#class_id").val();
                d.filter_status = $("#filter_status").val();
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
                data: "attendance_date",
            },
            {
                data: "day",
            },
            {
                data: "username",
            },
            {
                data: "name",
            },
            {
                data: "level",
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

$(document).on(
    "change",
    "#starting_date,#ending_date,#year_id,#level_id,#class_id,#filter_status",
    function () {
        getData();
    }
);

$(document)
    .off("click", "#addStudentAttendanceBtn")
    .on("click", "#addStudentAttendanceBtn", function () {
        $("#formModal").modal("show");
        $("#attendance_date").trigger("change");
        $(".myform").attr("id", "storeAttendance");
        $("#storeAttendance").trigger("reset");
    });

// For Filter
$(document).on("change", "#year_id,#level_id", function () {
    let academic_year_id = $("#year_id").val();
    let education_level_id = $("#level_id").val();
    $("#class_id").empty();
    if (academic_year_id && education_level_id) {
        $.ajax({
            type: "Get",
            url: "/admin/student-attendance/classroom/get",
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

                    $("#class_id").html(html);
                }
            },
        });
    }
});

// For Storing attendance
$(document).on("change", "#academic_year_id,#education_level_id", function () {
    let academic_year_id = $("#academic_year_id").val();
    let education_level_id = $("#education_level_id").val();
    $("#classroom_id").empty();
    if (academic_year_id && education_level_id) {
        $.ajax({
            type: "Get",
            url: "/admin/student-attendance/classroom/get",
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

$(document).on(
    "change",
    "#academic_year_id,#education_level_id,#classroom_id,#attendance_date",
    function () {
        let academic_year_id = $("#academic_year_id").val();
        let education_level_id = $("#education_level_id").val();
        let classroom_id = $("#classroom_id").val();
        let attendance_date = $("#attendance_date").val();
        $(".student-data").empty();
        if (
            academic_year_id &&
            education_level_id &&
            classroom_id &&
            attendance_date
        ) {
            $.ajax({
                type: "Get",
                url: "/admin/student-attendance/student/get",
                data: {
                    academic_year_id,
                    education_level_id,
                    classroom_id,
                    attendance_date,
                },
                success: function (response) {
                    if (response.status == true) {
                        console.log(response);
                        let rooms = response.message;
                        let html = "";
                        $.each(rooms, function (index, data) {
                            let attendance = data.attendance
                                ? data.attendance.status
                                : "";
                            html += ` <tr>
                        <td>${index + 1}</td>
                        <td>${
                            data.student.student_name
                        }<input type="hidden" name="student_id" value="${
                                data.student.id
                            }"></td>
                        <td id="desktop1">${data.student.username}</td>
                        <td id="desktop1">${data.roll_number}</td>
                        <td style="width:100px;">
                            <input type="radio" id="present-${data.student.id}"
                                name="attendance[${data.student.id}]" value="P"
                                class="present" ${
                                    attendance == "P" ? "checked" : ""
                                }>
                            <label for="present-${data.student.id}">P</label>

                            <input type="radio" id="leave-${data.student.id}"
                                name="attendance[${data.student.id}]" value="L"
                                class="leave" ${
                                    attendance == "L" ? "checked" : ""
                                }>
                            <label for="leave-${data.student.id}">L</label>

                            <input type="radio" id="absent-${data.student.id}"
                                name="attendance[${data.student.id}]" value="A"
                                class="absent" ${
                                    attendance == "A" ? "checked" : ""
                                }>
                            <label for="absent-${data.student.id}">A</label>
                        </td>
                    </tr>`;
                        });

                        $(".student-data").html(html);
                    }
                },
            });
        }
    }
);

$(document)
    .off("submit", "#storeAttendance")
    .on("submit", "#storeAttendance", function (e) {
        e.preventDefault();
        let formdata = new FormData(this);
        let dataUrl = "student-attendance/store";
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
                        title: "Success",
                        text: "Attendance Updated Successully!",
                    });
                    $("#formModal").modal("hide");
                    $("#storeAttendance").trigger("reset");
                    $("#get-attendance-data").DataTable().destroy().clear();
                    getData();
                }
            },
        });
    });

// $(document)
//     .off("change", "#attendance_date")
//     .on("change", "#attendance_date", function () {
//         let date = $(this).val();
//         console.log(date);
//         $.ajax({
//             type: "get",
//             url: "/admin/employee/attendance/check/" + date,
//             success: function (response) {
//                 console.log(response);

//                 if (response.status == 403) {
//                     $("#attendance_status").text("Already Taken");
//                     $("#attendance_status").addClass("bg-gradient-success");
//                     $("#attendance_status").removeClass("bg-gradient-dark");
//                     // $("#submitBtn").prop("disabled",true);
//                     let employeeDatas = response.message;
//                     if (response.message.length > 0) {
//                         $.each(employeeDatas, function (index, data) {
//                             if (data.status == "P") {
//                                 $("#present-" + data.user_id).prop(
//                                     "checked",
//                                     true
//                                 );
//                             } else if (data.status == "L") {
//                                 $("#leave-" + data.user_id).prop(
//                                     "checked",
//                                     true
//                                 );
//                             } else {
//                                 $("#absent-" + data.user_id).prop(
//                                     "checked",
//                                     true
//                                 );
//                             }
//                         });
//                     } else {
//                         $(".present").prop("checked", false);
//                         $(".leave").prop("checked", false);
//                         $(".absent").prop("checked", false);
//                         $("#attendance_status").text("Not taken yet");
//                         $("#attendance_status").removeClass(
//                             "bg-gradient-success"
//                         );
//                         $("#attendance_status").addClass("bg-gradient-dark");
//                     }
//                 }
//             },
//         });
//     });
