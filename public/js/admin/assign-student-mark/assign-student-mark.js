$(document).ready(function () {
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

    $(document)
        .off("change", "#education_level_id")
        .on("change", "#education_level_id", function () {
            let level = $(this).val();
            let year = $("#academic_year_id").val();
            let dataUrl =
                "assign-student-mark/get-classroom/" + year + "/" + level;
            if (level && year) {
                $.ajax({
                    type: "get",
                    url: dataUrl,
                    success: function (response) {
                        console.log(response);
                        if (response.status == true) {
                            let option = "<option value=''>Select one</option>";
                            let classroom = response.message;
                            $.each(classroom, function (index, data) {
                                option += `<option value="${data.id}">${data.class_title}</option>`;
                            });

                            $("#classroom_id").html(option);
                        }
                    },
                });
            }
        });

    $(document).on("click", "#filterBtn", function () {
        let academic_year_id = $("#academic_year_id").val();
        let exam_id = $("#exam_id").val();
        let education_level_id = $("#education_level_id").val();
        let classroom_id = $("#classroom_id").val();

        if (academic_year_id && exam_id && education_level_id && classroom_id) {
            $.ajax({
                url: "assign-mark/student",
                type: "get",
                data: {
                    academic_year_id,
                    exam_id,
                    education_level_id,
                    classroom_id,
                },
                success: function (response) {
                    console.log(response);
                    $("table tbody").empty();

                    if (response.status == true) {
                        let subjects = response.subject;
                        let students = response.message;
                        let studentMarks = response.existing_marks || {}; // Check if marks exist

                        let studentTable = `<table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" class="text-center">S.N</th>
                                    <th scope="col">Student Name</th>`;

                        $.each(subjects, function (index, data) {
                            studentTable += `<th class="text-center">
                                ${data.subject.title} <br>
                                <span class="text-success">(${data.full_marks}/${data.pass_marks})</span>
                                <input type="hidden" class="full-marks" data-subject="${data.subject.id}" value="${data.full_marks}">
                            </th>`;
                        });

                        studentTable += `<th class="text-center">Action</th></tr></thead>
                            <tbody>`;

                        $.each(students, function (index, studentData) {
                            studentTable += `<tr>
                                <td class="text-center">${index + 1}</td>
                                <td>
                                    <input type="hidden" name="student_id[]" value="${
                                        studentData.student_id
                                    }">
                                    ${studentData.student.student_name}
                                </td>`;

                            $.each(subjects, function (subIndex, subject) {
                                let existingMarks =
                                    studentMarks[studentData.student_id]?.[
                                        subject.subject.id
                                    ] || ""; // Load existing marks

                                studentTable += `<td>
                                    <input type="number" class="form-control text-center marks-input"
                                        name="marks[${studentData.student_id}][${subject.subject.id}]"
                                        data-subject-id="${subject.subject.id}"
                                        data-full-marks="${subject.full_marks}"
                                        value="${existingMarks}"
                                        placeholder="Enter Marks">
                                    <small class="text-danger error-msg" style="display:none;">Marks cannot exceed ${subject.full_marks}</small>
                                </td>`;
                            });

                            studentTable += `<td class="text-center">
                                <button class="btn btn-danger btn-sm removeSubject"><i class="fas fa-trash"></i></button>
                            </td></tr>`;
                        });

                        studentTable += `</tbody></table>`;

                        $("#studentMarksContainer").html(studentTable);

                        // Validation: Prevent marks greater than full marks
                        $(".marks-input").on("input", function () {
                            let enteredMarks = parseInt($(this).val());
                            let fullMarks = parseInt(
                                $(this).data("full-marks")
                            );

                            if (enteredMarks > fullMarks) {
                                $(this).addClass("is-invalid");
                                $(this).siblings(".error-msg").show();
                            } else {
                                $(this).removeClass("is-invalid");
                                $(this).siblings(".error-msg").hide();
                            }
                        });
                    }

                    $(".displayButton").removeClass("d-none");
                },
            });
        }
    });

    $(document)
        .off("submit", "#storeStudentMarks")
        .on("submit", "#storeStudentMarks", function (e) {
            e.preventDefault();
            let formdata = new FormData(this);
            console.log(formdata);
            let dataUrl = "assign-student-mark";
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
                            text: "Academic Year Created Successfully!",
                            showConfirmButton: false,
                            timer: 1000,
                        });
                        // $("#storeStudentMarks").trigger("reset");
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: "Warning!",
                            text: "Something went wrong!",
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    }
                },
            });
        });
});
