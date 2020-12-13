<?php

namespace App\Repositories;
use App\Models\User;

class IncomeRepository
{
    public function forUser(User $user)
    {
        return $user->incomes()
                    ->orderBy('created_at','asc')
                    ->get();
    }
}