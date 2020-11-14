<?php

namespace App\Http\Controllers\Report;
use App\Http\Controllers\Controller;
use App\Models\Expenses;
use Illuminate\Http\Request;

class ReportExpensesController extends Controller
{
    public function index()
    {
        $expenses = Expenses::all();
        return view('report.reportExpenses',compact(['expenses']));
    }
}
