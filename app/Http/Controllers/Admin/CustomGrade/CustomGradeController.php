<?php

namespace App\Http\Controllers\Admin\CustomGrade;

use Illuminate\Http\Request;
use App\Models\CustomGrading;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomGradingRequest;
use Yajra\DataTables\Facades\DataTables;

class CustomGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $year = CustomGrading::all();
            return DataTables::of($year)
                ->addIndexColumn()
                ->addColumn('action', function ($action) {
                    $route = route('custom-grade.show', $action->id);
                    $isedit = "Y";
                    $isDelete = "Y";
                    return view('admin.button.button', compact('action', 'route', 'isedit', 'isDelete'));
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $title = "All Custom Grade List";
        $extraJs = array_merge(
            config('js-map.admin.datatable.script'),
        );

        $extraCs = array_merge(
            config('js-map.admin.datatable.style'),
        );

        return view('admin.custom-grading.list', compact('title', 'extraJs', 'extraCs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomGradingRequest $request)
    {
        try {
            $data = $request->validated();
            CustomGrading::create($data);
            return response()->json(['status' => true, 'message' => 'Custom Grade created Successfully']);
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
            $data = CustomGrading::find($id);
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
    public function update(CustomGradingRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $year = CustomGrading::find($id);
            $year->update($data);
            return response()->json(['status' => true, 'message' => "Custom Grade Updated"]);
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
            $year = CustomGrading::find($id);
            if ($year != null) {
                $year->delete();
                return response()->json(['status' => true, 'message' => "Custom Grade Deleted Successfully!"]);
            } else {
                return response()->json(['status' => false, 'message' => "Something went wrong"]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'message' => $e->getMessage()]);
        }
    }
}
