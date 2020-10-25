<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;

    protected $fillable = [
        'incomeDate',
        'incomeName',
        'incomeMethod',
        'incomeType',
        'incomeAmount',
        'incomeNote',
        //'incomeAttachment',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

