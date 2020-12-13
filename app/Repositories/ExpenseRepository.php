<?php

namespace App\Repositories;
use App\Models\User;

class ExpenseRepository
{
    public function forUser(User $user)
    {
        $month = $request->input('month');
        return $user->expenses()
                    ->orderBy('created_at','asc')
                    ->whereMonth('incomeDate','11')
                    ->get();
    }
}