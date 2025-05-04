<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Models\AcademicYear;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentLedgerController extends Controller
{
    public function getLedger(){
        $title = "Assign Student Marks";
        $years = AcademicYear::where('status', 'Active')->get();
        return view('admin.exam.studentledger',compact('title','years'));
    }
}
