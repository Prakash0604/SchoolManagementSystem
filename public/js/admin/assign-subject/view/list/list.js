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
