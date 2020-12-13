<?php

namespace App\Http\Controllers\Income;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Income;
use DB;
use App\Repositories\IncomeRepository;

class ReportIncomeController extends Controller
{
    protected $incomes;
    public function __construct(IncomeRepository $incomes)
    {
        $this->middleware('auth');
        $this->incomes = $incomes;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $this->incomes = $incomes;
        // $incomes = $this->$incomes->forUser('$request'->User());

        return view('report.reportIncome',[
            'incomes' => $this->incomes->forUser($request->user()),
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
    public function destroy(Income $income)
    {
        $this->authorize('destroy', $income);
        $income-> delete();

        return redirect()->route('reportIncome');
    }

    // search

    public function search(Request $request)
    {
        $from = $request->input('form');
        $to = $request->input('to');

        $query = DB::table('incomes')->select()
                ->where('incomeDate','>=',$from)
                ->where('incomeDate','<=',$to)
                ->get();
        return view('report.reportIncome',compact(['query']));
    }
}
