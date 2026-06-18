<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
   public function index()
    {
       $transactions = \App\Models\Transaction::with('event')->latest()->paginate(20);
        return view('admin.transactions.index', compact('transactions'));
    }
}
