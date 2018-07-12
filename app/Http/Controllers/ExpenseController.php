<?php

namespace Expense\Http\Controllers;

use Illuminate\Http\Request;
use Expense\Expense;

class ExpenseController extends Controller
{
    
    public function store(Request $request)
    {

        // $this->validate($request, [
        //     'date' => 'required',
        //     'value' => 'required',
        //     'vat' => 'required',
        //     'reason' => 'required',
        // ]);

        Expense::create([
                'date' => $request->date,
                'value' => $request->value,
                'vat' => $request->vat,
                'reason' => $request->reason,
        ]);

        return "Saved";
    }

    
    /**
     * Get all expenses.
     *
     */
    public function expenses()
    {
        $expenses = Expense::all();
        return $expenses;
    }
}
