<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinancialReportController extends Controller
{
    public function index()
    {
        
        $totalSales = DB::table('sales')
            ->whereYear('sale_date', 2024)
            ->whereMonth('sale_date', 9)
            ->sum('total');

        
        $totalExpenses = DB::table('expenses')
            ->whereYear('expense_date', 2024)
            ->whereMonth('expense_date', 9)
            ->sum('amount');

        
        $taxTotal = DB::table('taxes')
            ->where('tax_name', 'VAT')
            ->value('rate');

        $taxAmount = $totalSales * $taxTotal;

        
        $profitBeforeTax = $totalSales - $totalExpenses;
        $profitAfterTax = $profitBeforeTax - $taxAmount;

        
        $data = DB::table('financial_reports')->insert([
            'month' => 9,
            'year' => 2024,
            'total_sales' => $totalSales,
            'total_expanse' => $totalExpenses,
            'profit_before_tax' => $profitBeforeTax,
            'tax_amount' => $taxAmount,
            'profit_after_tax' => $profitAfterTax,
            
        ]);
        dd($data);
        return view('financial_reports.index',compact('data'));
    }
}
