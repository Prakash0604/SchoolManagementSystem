<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Models\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExamRequest;
use App\Models\AcademicYear;
use Yajra\DataTables\Facades\DataTables;

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
                ->rawColumns(['action', 'status'])
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
}
