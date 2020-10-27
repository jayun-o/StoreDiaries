<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'expensesDate',
        'expensesName',
        'expensesMethod',
        'expensesType',
        'expensesAmount',
        'expensesNote',
        //'expensesAttachment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
