<?php

namespace App\Repositories;
use App\Models\User;
use Illuminate\Http\Request;

class IncomeRepository
{
    public function forUser(User $user)
    {
        // $month = $request->input('month');
        return $user->incomes()
                    ->orderBy('incomeDate','asc')
                    // ->whereMonth('incomeDate',$month)
                    ->get();
    }

}