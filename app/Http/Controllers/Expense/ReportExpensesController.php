<?php

namespace App\Http\Controllers\Expense;
use App\Http\Controllers\Controller;
use App\Models\Expenses;
use Illuminate\Http\Request;
use App\Repositories\ExpenseRepository;
use DB;

class ReportExpensesController extends Controller
{
    protected $expenses;
    
    public function __construct(ExpenseRepository $expenses)
    {
        $this->middleware('auth');
        $this->expenses = $expenses;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('report.reportExpenses',[
            'expenses' => $this->expenses->forUser($request->user()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expenses $expense)
    {
        $expense-> delete();

        return redirect()->route('reportExpenses');
    }

    // search
    public function search(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        $expenses = DB::table('expenses')->select()
                    ->where('expensesDate','>=', $from)
                    ->where('expensesDate', '<=', $to)
                    ->get();
        
        return view('report.reportExpenses',compact(['expenses']));
    }

    public function expensesTypePieChart(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        $data = DB::table('expenses')
            ->select(
            DB::raw('expensesType as expensesType'),
            DB::raw('count(*) as number'))
            ->whereBetween('expensesDate', [$from, $to])
            //->where('incomeDate','>=', $from)
            //->where('incomeDate', '<=', $to)
            ->groupBy('expensesType')
            ->get();
        $array[] = ['ExpensesType', 'Number'];

        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->expensesType, $value->number];
        }

        return view('report.expensesType')->with('expensesType', json_encode($array));
    }

    public function expensesMethodPieChart(Request $request)
    {
        $from = $request->input('from');
        $to = $request->input('to');

        $data = DB::table('expenses')
            ->select(
            DB::raw('expensesMethod as expensesMethod'),
            DB::raw('count(*) as number'))
            ->whereBetween('expensesDate', [$from, $to])
            //->where('incomeDate', '<=', $to)
            ->groupBy('expensesMethod')
            ->get();
        $array[] = ['ExpensesMethod', 'Number'];

        foreach($data as $key => $value)
        {
            $array[++$key] = [$value->expensesMethod, $value->number];
        }

        return view('report.expensesMethod')->with('expensesMethod', json_encode($array));
    }

}
