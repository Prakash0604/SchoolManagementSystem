$(document).ready(function () {
    getData();
});

function getData() {
    $("#get-subject-data").DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        autoWidth: false,
        ajax: "subject",
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
                data: "status",
            },
            {
                data: "action",
            },
        ],
    });
}

$(document)
    .off("click", "#addSubjectBtn")
    .on("click", "#addSubjectBtn", function () {
        $("#formModal").modal("show");
        $("#createBtn").show();
        $("#updateBtn").hide();
        $(".addForm").attr("id", "storeSubject");
        $("#storeSubject").trigger("reset");
    });


$(document)
    .off("submit", "#storeSubject")
    .on("submit", "#storeSubject", function (e) {
        e.preventDefault();
        let formdata = new FormData(this);
        let dataUrl = "/admin/subject";
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
                        text: "Subject Created Successfully!",
                        showConfirmButton: false,
                        timer: 1000,
                    });
                    $("#storeSubject").trigger("reset");
                    $("#formModal").modal("hide");
                    $("#get-subject-data").DataTable().destroy().clear();
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
                    url: "subject/status/" + id,
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
                            $("#get-subject-data").DataTable().destroy().clear();
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
        $(".addForm").attr("id", "updateSubject");
        $.ajax({
            url: urlData,
            type: "get",
            success: function (response) {
                if (response.status == true) {
                    $("#formModal").modal("show");
                    $("#createBtn").hide();
                    $("#updateBtn").show();
                    $("#subject_title").val(response.message.title);
                    $("#subject_id").val(response.message.id);
                }
            },
        });
    });

    $(document).off("submit","#updateSubject").on("submit","#updateSubject",function(e){
        e.preventDefault();
        let id=$("#subject_id").val();
        let dataUrl="/admin/subject/"+id;
        let formdata=new FormData(this);
        formdata.append("_method","PUT");
        $.ajax({
            type:"post",
            url:dataUrl,
            data:formdata,
            contentType:false,
            processData:false,
            success:function(response){
                if(response.status == true){
                    Swal.fire({
                        icon:"success",
                        title:"Updated!",
                        text:"Subject Updated Successfully!",
                        showConfirmButton:false,
                        timer:1000
                    });
                    $("#formModal").modal("hide");
                    $("#updateSubject").trigger("reset");
                    $("#get-subject-data").DataTable().destroy().clear();
                    getData();
                }else{
                    $("#formModal").modal("hide");
                    Swal.fire({
                        icon:"error",
                        title:"Warning!",
                        text:"Something went wrong!",
                        showConfirmButton:false,
                        timer:3000
                    });
                    setTimeout(() => {
                        $("#formModal").modal("show");
                    }, 3000);
                }
            },
            error:function(xhr){
                if(xhr.status == 422){
                    let errors=xhr.responseJSON.errors;
                    $.each(errors,function(data,message){
                        $("#"+data+"-error").text(message[0]);
                    });
                    setTimeout(() => {
                        $(".error-message").text("");
                    }, 3000);
                }
            }

        })
    })

    $(document)
    .off("click", ".deleteButton")
    .on("click", ".deleteButton", function () {
        let dataId = $(this).attr("data-id");
        let dataUrl = "/admin/subject/" + dataId;
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
                                text: "Subject has been deleted.",
                            });
                            $("#get-subject-data")
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
