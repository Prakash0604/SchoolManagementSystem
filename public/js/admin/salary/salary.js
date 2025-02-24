$(document).ready(function () {
    getData();
});

function clear() {
    $(".error-message").text("");
}
$(document)
    .off("click", "#addEmployeeSalaryBtn")
    .on("click", "#addEmployeeSalaryBtn", function () {
        clear();
        $("#formModal").modal("show");
        $(".salaryForm").attr("id", "storeEmployeeSalary");
        $("#storeEmployeeSalary").trigger("reset");
        $("#updateBtn").hide();
        $("#submitBtn").show();
    });

function getData() {
    $("#get-salary-data").DataTable({
        processing: true,
        serverSide: true,
        ajax: "salary",
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
                data: "name",
            },
            {
                data: "month",
            },
            {
                data: "salary_date",
            },
            {
                data: "net_salary",
            },
            {
                data: "bonus",
            },
            {
                data: "fine",
            },
            {
                data: "total_salary",
            },
            {
                data: "action",
            },
        ],
    });
}

$(document)
    .off("change", "#user_id")
    .on("change", "#user_id", function () {
        let user_id = $(this).val();
        console.log(user_id);
        let dataUrl = "/admin/employee/get-data/" + user_id;
        $.ajax({
            type: "get",
            url: dataUrl,
            success: function (response) {
                if (response.status == true) {
                    console.log(response);
                    $("#employeeID").val(response.message.username);
                    $("#employeeRole").val(response.message.role.title);
                    $("#employeeName").val(response.message.name);
                    $("#net_salary").val(response.message.monthly_salary);
                } else {
                    Swal.fire({
                        icon: "warning",
                        title: "Warning!",
                        text: "Something went wrong!",
                    });
                }
            },
        });
    });

$(document)
    .off("submit", "#storeEmployeeSalary")
    .on("submit", "#storeEmployeeSalary", function (e) {
        e.preventDefault();
        let formdata = new FormData(this);
        let dataUrl = "salary";
        $.ajax({
            type: "post",
            url: dataUrl,
            data: formdata,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                if (response.status == true) {
                    Swal.fire({
                        icon: "success",
                        title: "Saved",
                        text: "Salary Saved Successfully",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#formModal").modal("hide");
                    $("#get-salary-data").DataTable().destroy().clear();
                    getData();
                } else if (response.status == 403) {
                    alert("Salary already registered for this month!");
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "Warning",
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
                }
            },
        });
    });
