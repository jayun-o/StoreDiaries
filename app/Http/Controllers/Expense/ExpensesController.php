<?php

namespace App\Http\Controllers\Expense;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index()
    {
        return view('features.expenses');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'date' => 'required',
            'name' => 'required|max:255',
            'method' => 'required',
            'type' => 'required',
            'amount' => 'required',
            'note'=> 'required',
            //'attachment',
        ]);

        $request->user()->expenses()->create([
            'expensesDate' => $request->date,
            'expensesName' => $request->name,
            'expensesMethod' => $request->method,
            'expensesType' => $request->type,
            'expensesAmount' => $request->amount,
            'expensesNote' => $request->note,
            //'expensesAttachment' => $request->attachment,
        ]);
        

        return redirect()->route('expenses');
    }
}
