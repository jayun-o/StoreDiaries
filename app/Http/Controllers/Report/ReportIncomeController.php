<?php

namespace App\Http\Controllers\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;

class ReportIncomeController extends Controller
{
    public function index()
    {
        $incomes = Income::all();
        return view('report.reportIncome',compact(['incomes']));
    }

}
