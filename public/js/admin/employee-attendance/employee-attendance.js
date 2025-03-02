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
            url: "employee-attendance",
            type: "Get",
            data: function (d) {
                d.filter_start_date = $("#starting_date").val();
                d.filter_end_date = $("#ending_date").val();
                d.employee_id = $("#employee_id").val();
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
                data: "role",
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
    "#starting_date,#ending_date,#employee_id,#filter_status",
    function () {
        getData();
    }
);

$(document)
    .off("click", "#addEmployeeAttendanceBtn")
    .on("click", "#addEmployeeAttendanceBtn", function () {
        $("#formModal").modal("show");
        $("#attendance_date").trigger("change");
        $(".myform").attr("id", "storeAttendance");
        $("#storeAttendance").trigger("reset");
    });

$(document)
    .off("submit", "#storeAttendance")
    .on("submit", "#storeAttendance", function (e) {
        e.preventDefault();
        let formdata = new FormData(this);
        let dataUrl = "employee-attendance/store";
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

$(document)
    .off("change", "#attendance_date")
    .on("change", "#attendance_date", function () {
        let date = $(this).val();
        console.log(date);
        $.ajax({
            type: "get",
            url: "/admin/employee/attendance/check/" + date,
            success: function (response) {
                console.log(response);

                if (response.status == 403) {
                    $("#attendance_status").text("Already Taken");
                    $("#attendance_status").addClass("bg-gradient-success");
                    $("#attendance_status").removeClass("bg-gradient-dark");
                    // $("#submitBtn").prop("disabled",true);
                    let employeeDatas = response.message;
                    if (response.message.length > 0) {
                        $.each(employeeDatas, function (index, data) {
                            if (data.status == "P") {
                                $("#present-" + data.user_id).prop(
                                    "checked",
                                    true
                                );
                            } else if (data.status == "L") {
                                $("#leave-" + data.user_id).prop(
                                    "checked",
                                    true
                                );
                            } else {
                                $("#absent-" + data.user_id).prop(
                                    "checked",
                                    true
                                );
                            }
                        });
                    } else {
                        $(".present").prop("checked", false);
                        $(".leave").prop("checked", false);
                        $(".absent").prop("checked", false);
                        $("#attendance_status").text("Not taken yet");
                        $("#attendance_status").removeClass("bg-gradient-success");
                        $("#attendance_status").addClass("bg-gradient-dark");
                    }
                }
            },
        });
    });
