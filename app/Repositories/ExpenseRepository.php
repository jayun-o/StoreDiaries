<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Http\Request;

class ExpenseRepository
{
    public function forUser(User $user)
    {
        $month = $request->input('month');
        return $user->expenses()
                    ->orderBy('created_at','asc')
                    ->whereMonth('ExpensesDate',$month)
                    ->get();
    }
}