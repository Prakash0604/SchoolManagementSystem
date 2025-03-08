<?php

use App\Http\Controllers\Admin\AcademicYear\AcademicYearController;
use App\Http\Controllers\Admin\EducationLevel\AssignGradeSubject\AssignSubjectController;
use App\Http\Controllers\Admin\EducationLevel\Classroom\ClassroomController;
use App\Http\Controllers\Admin\EducationLevel\EducationLevelController;
use App\Http\Controllers\Admin\Employee\EmployeeAttendanceController;
use App\Http\Controllers\Admin\Employee\EmployeeController;
use App\Http\Controllers\Admin\Employee\SalaryController;
use App\Http\Controllers\Admin\Institute\InstituteController;
use App\Http\Controllers\Admin\Student\StudentAttendanceController;
use App\Http\Controllers\Admin\Student\StudentController;
use App\Http\Controllers\Admin\Subject\SubjectController;
use App\Models\Classroom;
use App\Models\Subject;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard.dashboard');
});

Route::prefix('admin')->group(function () {
    Route::get('institute-info', [InstituteController::class, 'index'])->name('admin.institute');
    Route::post('institute-info', [InstituteController::class, 'storeInstitute'])->name('admin.storeorUpdateInstitute');

    // Employee
    Route::resource('employee',EmployeeController::class);
    Route::post('employee/reset-password/{id}',[EmployeeController::class,'resetPassword']);
    Route::resource('salary',SalaryController::class);
    Route::get('employee/get-data/{id}',[SalaryController::class,'getEmployee']);
    Route::get('employee-attendance',[EmployeeAttendanceController::class,'index'])->name('employee.attendance.index');
    Route::get('employee/attendance/check/{date}',[EmployeeAttendanceController::class,'checkEmployeeAttendance'])->name('employee.attendance.check');
    Route::post('employee-attendance/store', [EmployeeAttendanceController::class, 'storeEmployeeAttendace'])->name('employee.attendance.store');
    Route::get('employee/status/{id}',[EmployeeController::class,'statusToggle']);

    // Academic Year
    Route::resource('academic-year',AcademicYearController::class);
    Route::resource('education-level',EducationLevelController::class);
    Route::get('academic-year/status/{id}',[AcademicYearController::class,'statusToggle']);
    Route::get('education-level/status/{id}',[EducationLevelController::class,'statusToggle']);

    // Classroom
    Route::resource('classroom',ClassroomController::class);
    Route::get('classroom/status/{id}',[ClassroomController::class,'statusToggle']);

    // Subject
    Route::resource('subject',SubjectController::class);
    Route::get('subject/status/{id}',[SubjectController::class,'statusToggle']);
    Route::resource('assign-subject', AssignSubjectController::class);

    Route::get('grade/subject/{academicYear}/{educationLevel}/get',[AssignSubjectController::class,'getSubject']);
    Route::get('assign-subject/view/list',[AssignSubjectController::class,'assignSubjectList'])->name('assign-subject.list');
    Route::get('assign-subject/view/list/status/{id}',[AssignSubjectController::class,'statusToggle']);

    Route::resource('student',StudentController::class);
    Route::get('student/status/{id}',[StudentController::class,'statusToggle']);
    Route::get('student/guardians/remove/{id}',[StudentController::class,'removeGuardians']);
    Route::get('student/classroom/get',[StudentController::class,'getClassroom']);

    Route::get('student-attendance',[StudentAttendanceController::class,'index'])->name('student.attendance.index');
    Route::get('student/attendance/check/{date}',[StudentAttendanceController::class,'checkStudentAttendance'])->name('student.attendance.check');
    Route::post('student-attendance/store', [StudentAttendanceController::class, 'storeStudentAttendace'])->name('student.attendance.store');
    Route::get('student-attendance/classroom/get',[StudentAttendanceController::class,'getClassroom']);
    Route::get('student-attendance/student/get',[StudentAttendanceController::class,'getStudent']);


});
