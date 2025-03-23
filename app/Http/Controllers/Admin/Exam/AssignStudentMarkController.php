<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Models\Student;
use App\Models\ExamMark;
use App\Models\Classroom;
use App\Models\ExamRecord;
use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Models\StudentAcademic;
use App\Models\AssignExamSubject;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\AssignExam;
use Illuminate\Support\Facades\Validator;

class AssignStudentMarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Assign Student Marks";
        $years = AcademicYear::where('status', 'Active')->get();
        return view('admin.exam.assign-student-mark.ledger', compact('title', 'years'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function getClassroom($year, $level)
    {
        try {
            $classroom = Classroom::where('education_level_id', $level)->where('academic_year_id', $year)->get();
            return response()->json(['status' => true, 'message' => $classroom]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function getStudent(Request $request)
    {
        try {
            $year = $request->academic_year_id;
            $level = $request->education_level_id;
            $classroom = $request->classroom_id;
            $exam = $request->exam_id;
            // $subjects = AssignExamSubject::with('subject')->where('assign_exam_id', $exam)->get();
            $subjects=AssignExam::with('exam_subject.subject')->where('academic_year_id',$year)->where('exam_id',$exam)->where('education_level_id',$level)->get();
            // dd($subjects);
            // ->pluck('subject.title','subject.id');
            $students = StudentAcademic::with('student')->where('academic_year_id', $year)->where('education_level_id', $level)->where('classroom_id', $classroom)->whereHas('student',function($q){
                $q->where('status','Active');
            })->get();
            $examResult = ExamRecord::where([
                'academic_year_id' => $year,
                'exam_id' => $exam,
                'education_level_id' => $level,
                'classroom_id' => $classroom,
            ])->first();

            $existingMarks = "";
            if (!empty($examResult)) {

                if (!$examResult) {
                    return response()->json(['status' => false, 'message' => 'No records found']);
                }

                $existingMarks = ExamMark::where('exam_record_id', $examResult->id)
                    ->get()
                    ->groupBy('student_id')
                    ->map(function ($marks) {
                        return $marks->pluck('marks_obtained', 'subject_id');
                    });
            }
            // dd($examResult,$existingMarks);


            return response()->json(['status' => true, 'message' => $students, 'subject' => $subjects, 'existing_marks' => $existingMarks]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $validator = Validator::make($request->all(), [
                'academic_year_id' => 'required|exists:academic_years,id',
                'exam_id' => 'required|exists:exams,id',
                'education_level_id' => 'required|exists:education_levels,id',
                'classroom_id' => 'required|exists:classrooms,id',
                'marks' => 'required|array',
                'marks.*.*' => 'numeric|min:0',
            ]);

            if ($validator->fails()) {
                return response()->json(['status' => false, 'errors' => $validator->errors()], 422);
            }

            $examResult = ExamRecord::updateOrCreate(
                [
                    'academic_year_id' => $request->academic_year_id,
                    'exam_id' => $request->exam_id,
                    'education_level_id' => $request->education_level_id,
                    'classroom_id' => $request->classroom_id,
                ],
                []
            );

            foreach ($request->marks as $studentId => $subjects) {
                foreach ($subjects as $subjectId => $mark) {
                    ExamMark::updateOrCreate(
                        [
                            'exam_record_id' => $examResult->id,
                            'student_id' => $studentId,
                            'subject_id' => $subjectId,
                        ],
                        [
                            'marks_obtained' => $mark,
                        ]
                    );
                }
            }
            DB::commit();
            return response()->json(['status' => true, 'message' => 'Exam results stored successfully.']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
