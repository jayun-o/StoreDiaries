<?php

namespace App\Repositories;

class IncomeRepository
{
    public function forUser(User $user)
    {
        return $user->incomes()->orderBy('created_at','asc')->get();
    }
}