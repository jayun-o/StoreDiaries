<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IncomeController extends Controller
{
    public function index()
    {
        return view('features.income');
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

        $request->user()->incomes()->create([
            'incomeDate' => $request->date,
            'incomeName' => $request->name,
            'incomeMethod' => $request->method,
            'incomeType' => $request->type,
            'incomeAmount' => $request->amount,
            'incomeNote' => $request->note,
            //'incomeAttachment' => $request->attachment,
        ]);
        

        return redirect()->route('income');
    }
}
