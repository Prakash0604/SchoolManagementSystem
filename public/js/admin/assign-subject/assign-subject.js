$(document).ready(function () {
    $(document).on("click", ".addMoreBtn", function () {
        let academicYear = $("#academic_year_id").val();
        let educationLevel = $("#education_level_id").val();

        if (!academicYear || !educationLevel) {
            // alert("Please select Academic Year and Education Level first.");
            Swal.fire({
                icon: "warning",
                title: "Warning!",
                text: "Please select Academic Year and Education Level first.",
            });
            return;
        }

        $.ajax({
            url:
                "grade/subject/" + academicYear + "/" + educationLevel + "/get",
            type: "GET",
            dataType: "json",
            success: function (response) {
                if (response.status == true) {
                    let options = `<option value="">Select*</option>`;
                    response.message.forEach((subject) => {
                        options += `<option value="${subject.id}">${subject.title}</option>`;
                    });

                    let html = `<tr class="row">
                                 <td class="col-4 p-r-0">
                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Select Subject*</label>
                                        <select name="subject_id[]" class="form-control m-field subject-dropdown">
                                           ${options}
                                        </select>
                                    </div>
                                    <span id="subject_id-error" class="text-danger"></span>
                                </td>
                                <td class="col-4">
                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Full Marks*</label>
                                        <input type="number" name="full_marks[]" placeholder="Total Full Marks"
                                            min="0" class="form-control m-field">
                                    </div>
                                    <span id="full_marks-error" class="text-danger"></span>
                                </td>
                                <td class="col-2">
                                    <div class="m-div">
                                        <label class="m-label bg-gradient-blue m-white">Pass Marks*</label>
                                        <input type="number" name="pass_marks[]" placeholder="Total Pass Marks"
                                            min="0" class="form-control m-field">
                                    </div>
                                    <span id="pass_marks-error" class="text-danger"></span>
                                </td>
                                <td class="col-2 mt-3 d-flex align-items-center">
                                    <div class="">
                                        <span class="btn btn-sm bg-gradient-dark m-white addMoreBtn"
                                            style="border-radius:15px;margin-left:8px!important;"><i class="fas fa-plus"></i>
                                            Add more</span>
                                        <span class="btn btn-sm bg-gradient-danger m-white removeBtn"
                                            style="border-radius:15px;"><i class="fas fa-minus"></i>
                                            Remove</span>
                                    </div>
                                </td>
                            </tr>`;
                    $("#textboxDiv").append(html);
                } else {
                    // alert("No subjects found.");
                    Swal.fire({
                        icon: "warning",
                        title: "Warning!",
                        text: "No Subject Found.",
                    });
                }
            },
            error: function () {
                Swal.fire({
                    icon: "warning",
                    title: "Warning!",
                    text: "Error fetching subjects. Try again.",
                });
            },
        });
    });

    $(document).on("click", ".removeBtn", function () {
        $(this).closest("tr").remove();
    });

    $(document)
        .off("submit", "#storeAssignSubject")
        .on("submit", "#storeAssignSubject", function (e) {
            e.preventDefault();
            let formdata = new FormData(this);
            let dataUrl = "/admin/assign-subject";
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
                            title: "Created!",
                            text: response.message,
                        });
                        $("#storeAssignSubject").trigger("reset");
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Warning!",
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
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Warning!",
                            text: "Something went wrong!",
                        });
                    }
                },
            });
        });

    $(document).on(
        "change",
        "#academic_year_id,#education_level_id",
        function () {
            $(".subject_id").empty();
            let academicYear = $("#academic_year_id").val();
            let educationLevel = $("#education_level_id").val();
            console.log(academicYear, educationLevel);

            let dataUrl =
                "/admin/grade/subject/" +
                academicYear +
                "/" +
                educationLevel +
                "/get";
            $.ajax({
                url: dataUrl,
                // headers: {
                //     "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                //         "content"
                //     ),
                // },
                type: "get",
                contentType: false,
                processData: false,
                success: function (response) {
                    let html =
                        "<option selected value=''>Select subject</option>";
                    let subjects = response.message;
                    $.each(subjects, function (index, data) {
                        html += `<option selected value='${data.id}'>${data.title}</option>`;
                    });

                    $(".subject_id").html(html);
                },
            });
        }
    );
});
