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
        responsive: true,
        autoWidth: false,
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

    $(document).off("click",".editButton").on("click",".editButton",function(){
        let dataUrl=$(this).attr("data-url");
        // console.log(dataUrl);
        $(".salaryForm").attr("id", "updateEmployeeSalary");
        $("#updateBtn").show();
        $("#submitBtn").hide();
        $.ajax({
            url:dataUrl,
            type:"get",
            success:function(response){
                if(response.status == true){
                    $("#formModal").modal("show");
                    $("#user_id").val(response.message.user_id).trigger("change");
                    $("#salary_month").val(response.message.month);
                    $("#salary_date").val(response.message.salary_date);
                    $("#net_salary").val(response.message.net_salary);
                    $("#bonus").val(response.message.bonus);
                    $("#fine").val(response.message.fine);
                    $("#salary_id").val(response.message.id);
                }
            }
        })

    })


    function formatMonth(inputValue) {
        let date = new Date(inputValue + "-01");
        return date.toLocaleString('en-US', { month: 'long', year: 'numeric' });
    }

    $(document).off("click",".viewModalBtn").on("click",".viewModalBtn",function(){
        let id=$(this).attr("data-id");
        let dataUrl="/admin/salary/"+id+"/edit";

        $.ajax({
            url:dataUrl,
            type:"get",
            success:function(response){
                console.log(response);

                if(response.status == true){
                    $("#viewModal").modal("show");
                    $("#userImageAppend").val(response.message.user_id).trigger("change");
                    if(response.message.user.image !=null){
                        $("#userImageAppend").attr("src","/storage/"+response.message.user.image);
                    }else{
                        $("#userImageAppend").attr("src","/default/avatar-5.webp");
                    }
                    $("#view_name").text(response.message.user.name);
                    $("#view_username").text(response.message.user.username);
                    $("#view_role_id").text(response.message.user.role.title);
                    $("#view_salary_month").text(formatMonth(response.message.month));
                    $("#view_receiving_date").text(response.message.salary_date);
                    $("#view_bonus").text("Rs."+response.message.bonus ?? '');
                    $("#view_deduction").text("Rs."+response.message.fine ?? '');
                    $("#view_net_amount").text("Rs."+response.message.total_salary);
                    $("#view_salary_amount").text("Rs."+response.message.net_salary);
                }
            }
        })

    })

    $(document).off("submit","#updateEmployeeSalary").on("submit","#updateEmployeeSalary",function(e){
        e.preventDefault();
        let data_id=$("#salary_id").val();
        let dataUrl="/admin/salary/"+data_id;
        let formdata=new FormData(this);
        formdata.append("_method","put");
        $.ajax({
            type:"post",
            url:dataUrl,
            data:formdata,
            processData:false,
            contentType:false,
            success:function(response){
                if(response.status == true){
                    Swal.fire({
                        icon:"success",
                        title:"Updated!",
                        text:"Salary Updated Successfully!",
                        showConfirmButton:false,
                        timer:1000
                    });
                    $("#formModal").modal("hide");
                    $("#get-salary-data").DataTable().destroy().clear();
                    getData();
                }else{
                    console.log(response);
                    alert("Something went wrong");
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

        })
    })


$(document)
.off("click", ".deleteButton")
.on("click", ".deleteButton", function () {
    let dataId = $(this).attr("data-id");
    let dataUrl = "/admin/salary/" + dataId;
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
                            text: "Salary has been deleted.",
                        });
                        $("#get-salary-data").DataTable().destroy().clear();
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
