<?php

namespace Expense;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
    	'date', 'value', 'vat', 'reason'
    ];
}
