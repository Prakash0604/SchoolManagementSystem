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

    $(document).on("click", "#filterBtn", function () {
        let academic_year_id = $("#academic_year_id").val();
        let exam_id = $("#exam_id").val();
        let education_level_id = $("#education_level_id").val();

        if (academic_year_id && exam_id && education_level_id) {
            $.ajax({
                url: "/admin/assign-exam-subject/get-subject",
                type: "Get",
                data: {
                    academic_year_id,
                    exam_id,
                    education_level_id,
                },
                success: function (response) {
                    console.log(response);
                    $("table tbody").empty();
                    let html = ``;
                    if (response.status == true) {
                        $(".displayButton").removeClass("d-none");
                        let subject = response.message;
                        $.each(subject, function (index, data) {
                            html += `  <tr class="">
                            <td scope="row"><input type="hidden" value="${data.subject.id}" class="form-control m-field" name="subject_id[]" id=""><input type="text" value="${data.subject.title}" class="form-control m-field"  id="" readonly></td>
                            <td><input type="date"  class="form-control m-field" name="date[]" id=""></td>
                            <td><input type="number"  value="${data.full_marks}"  class="form-control m-field" name="full_marks[]" id=""></td>
                            <td><input type="number"  value="${data.pass_marks}" class="form-control m-field" name="pass_marks[]" id=""></td>
                            <td><input type="time" class="form-control m-field" name="start_at[]" id=""></td>
                            <td><input type="time" class="form-control m-field" name="end_at[]" id=""></td>
                            <td><button class="btn btn-danger removeSubject"><i class="fas fa-trash"></i></button></td>
                            </tr>`;
                        });

                        $("table tbody").html(html);
                    }
                },
            });
        }
    });

    $(document).on("click", ".removeSubject", function () {
        $(this).closest("tr").remove();
    });

    $(document)
        .off("submit", "#storeExamSubject")
        .on("submit", "#storeExamSubject", function (e) {
            e.preventDefault();
            let formdata = new FormData(this);
            let dataUrl = "/admin/assign-exam-subject";
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
                            text: "Exam Subject Saved Successfully",
                            showConfirmButton: false,
                            timer: 1000,
                        });
                        setTimeout(() => {
                            location.reload();
                        }, 1000);
                    }
                },
            });
        });
});
