<?php

namespace App\Http\Controllers\Report;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;
use App\Models\Expenses;

class SalesReportController extends Controller
{
    public function index()
    {
        return view('features.salesReport');
    }


    public function barchart(Request $request)
    {
    	
    	return view('report.barchart');
    }
    
}
