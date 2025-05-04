<?php

namespace App\Http\Controllers\Admin\Exam;

use Carbon\Carbon;
use App\Models\Exam;
use App\Models\User;
use App\Models\AssignExam;
use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Models\AssignExamSubject;
use App\Http\Requests\ExamRequest;
use App\Models\AssignGradeSubject;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ExamSubjectRequest;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $year = Exam::orderBy('id', 'desc')->get();
            return DataTables::of($year)
                ->addIndexColumn()
                ->addColumn('action', function ($action) {
                    $route = route('exam.show', $action->id);
                    $isedit = "Y";
                    $isDelete = "Y";
                    return view('admin.button.button', compact('action', 'route', 'isedit', 'isDelete'));
                })
                ->addColumn('status', function ($status) {
                    $stat = $status->status == 'Active' ? 'checked' : '';
                    return '<div class="form-check form-switch d-flex">
                    <input class="form-check-input statusToggle mx-auto" type="checkbox" ' . $stat . ' data-id="' . $status->id . '" role="switch" id="flexSwitchCheckDefault">
                    </div>';
                })
                ->rawColumns(['action', 'status', 'title'])
                ->make(true);
        }
        $title = "All Exam List";
        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
        );
        $years = AcademicYear::where('status', 'Active')->get();

        return view('admin.exam.list', compact('title', 'extraJs', 'extraCs', 'years'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function statusToggle($id)
    {
        try {

            $year = Exam::find($id);
            if ($year->status == 'Active') {
                $year->status = 'Inactive';
            } else {
                $year->status = 'Active';
            }
            $year->save();
            return response()->json(['status' => true, 'message' => 'Status Updated']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(ExamRequest $request)
    {
        try {
            $data = $request->validated();
            Exam::create($data);
            return response()->json(['status' => true, 'message' => 'Exam created Successfully']);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $data = Exam::find($id);
            return response()->json(['status' => true, 'message' => $data]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
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
    public function update(ExamRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $year = Exam::find($id);
            $year->update($data);
            return response()->json(['status' => true, 'message' => "Exam Updated"]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $exam = Exam::find($id);
            if ($exam != null) {
                $exam->delete();
                return response()->json(['status' => true, 'message' => "Exam Deleted Successfully!"]);
            } else {
                return response()->json(['status' => false, 'message' => "Something went wrong"]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function assignSubject()
    {
        // dd("test");
        $title = "Assign Exam Subject";
        $years = AcademicYear::where('status', 'Active')->get();
        return view('admin.exam.assign-exam-subject.assign-exam-subject', compact('title', 'years'));
    }

    public function getExam($id)
    {
        try {
            $exam = Exam::where('academic_year_id', $id)->get();
            $gradeSubject = AssignGradeSubject::with('level')
                ->where('academic_year_id', $id)
                ->orderBy('education_level_id')
                ->orderBy('id')
                ->distinct('education_level_id')
                ->get();
            return response()->json(['status' => true, 'message' => $exam, 'grade' => $gradeSubject]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function getSubject(Request $request)
    {
        try {
            $academic_year_id = $request->academic_year_id;
            $education_level_id = $request->education_level_id;
            $examSubjects = AssignExam::with('exam_subject')
                ->where('academic_year_id', $academic_year_id)
                ->where('education_level_id', $education_level_id)
                ->get();

            $examSubjectIds = $examSubjects->flatMap(function ($exam) {
                return $exam->exam_subject->pluck('subject_id');
            })->toArray();

            $gradeSubject = AssignGradeSubject::with('subject')
                ->where('academic_year_id', $academic_year_id)
                ->whereHas('subject', function ($q) use ($examSubjectIds) {
                    $q->whereNotIn('id', $examSubjectIds);
                })
                ->where('education_level_id', $education_level_id)->get();
            return response()->json(['status' => true, 'message' => $gradeSubject]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function storeSubject(ExamSubjectRequest $request)
    {
        try {
            DB::beginTransaction();
            // dd($request->all());
            // $user = User::first();
            $assign_exam = AssignExam::create([
                'academic_year_id' => $request->academic_year_id,
                'exam_id' => $request->exam_id,
                'education_level_id' => $request->education_level_id,
                'created_by' =>Auth::id(),
            ]);

            foreach ($request->subject_id as $key => $subject) {
                AssignExamSubject::create([
                    'assign_exam_id' => $assign_exam->id,
                    'subject_id' => $subject,
                    'date' => $request->date[$key],
                    'full_marks' => $request->full_marks[$key],
                    'pass_marks' => $request->pass_marks[$key],
                    'start_at' => $request->start_at[$key],
                    'end_at' => $request->end_at[$key],
                ]);
            }

            DB::commit();
            return response()->json(['status' => true, 'message' => 'Created Successfully']);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function getExamDatas(Request $request)
    {
        try {
            if ($request->ajax()) {
                $exam_id = $request->exam_id;
                $academic_year_id = $request->academic_year_id;
                $education_level_id = $request->education_level_id;

                $exams = $this->getExamData($exam_id, $academic_year_id, $education_level_id);

                $subjects = collect();
                foreach ($exams as $exam) {
                    foreach ($exam->examsubject as $subject) {
                        $subjects->push([
                            'DT_RowIndex'  => null,
                            'subject'      => $subject->subject->title ?? 'N/A',
                            'date'         => $subject->date ?? 'N/A',
                            'full_marks'   => $subject->full_marks ?? 'N/A',
                            'pass_marks'   => $subject->pass_marks ?? 'N/A',
                            'start_time'   => $subject->start_at ? Carbon::parse($subject->start_at)->format('h:i A') : 'N/A',
                            'end_time'     => $subject->end_at ? Carbon::parse($subject->end_at)->format('h:i A') : 'N/A',
                            'action'       => view('admin.button.button', [
                                'action'   => $subject,
                                'route'    => '',
                                'isedit'   => 'Y',
                                'isDelete' => 'Y'
                            ])->render(),
                        ]);
                    }
                }

                return DataTables::of($subjects)
                    ->addIndexColumn()
                    ->rawColumns(['action'])
                    ->make(true);
            }

            $title = "Exam Detail";
            $years = AcademicYear::where('status', 'Active')->get();
            $extraJs = array_merge(config('js-map.admin.datatable.script'));
            $extraCs = array_merge(config('js-map.admin.datatable.style'));

            return view('admin.exam.exam-detail', compact('title', 'years', 'extraJs', 'extraCs'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return back();
        }
    }




    public function getExamData($exam_id, $academic_year_id, $education_level_id)
    {
        return AssignExam::with(['examsubject.subject', 'exam', 'year', 'level'])
            ->when(!empty($exam_id) && $exam_id !== 'null', function ($q) use ($exam_id) {
                $q->whereHas('exam', function ($subq) use ($exam_id) {
                    $subq->where('id', $exam_id);
                });
            })
            ->when(!empty($academic_year_id) && $academic_year_id !== 'null', function ($q) use ($academic_year_id) {
                $q->whereHas('year', function ($subq) use ($academic_year_id) {
                    $subq->where('id', $academic_year_id);
                });
            })
            ->when(!empty($education_level_id) && $education_level_id !== 'null', function ($q) use ($education_level_id) {
                $q->whereHas('level', function ($subq) use ($education_level_id) {
                    $subq->where('id', $education_level_id);
                });
            })
            ->orderBy('id', 'desc')
            ->get();
    }

    public function editExamDatas($id)
    {
        try {
            $exam = AssignExamSubject::with(['subject'])->find($id);
            return response()->json(['status' => true, 'message' => $exam]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function updateExamDatas(Request $request, $id)
    {
        try {
            // dd($request->all());
            $exam = AssignExamSubject::find($id);
            $exam->update($request->all());
            return response()->json(['status' => true]);
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }

    public function deleteExamDatas($id)
    {
        try {
            $exam = AssignExamSubject::find($id);
            if ($exam != null) {
                $exam->delete();
                return response()->json(['status' => true, 'message' => "Exam Subject Deleted Successfully!"]);
            } else {
                return response()->json(['status' => false, 'message' => "Something went wrong"]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
}
