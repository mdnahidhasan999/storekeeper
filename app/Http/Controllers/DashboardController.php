<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   
        public function index()
    {
        // Calculate sales figures
        $todaySales = $this->getSalesForDate(now());
        $yesterdaySales = $this->getSalesForDate(now()->subDay());
        $thisMonthSales = $this->getSalesForMonth(now());
        $lastMonthSales = $this->getSalesForMonth(now()->subMonth());

        $salesFigures = [
            'today' => $todaySales,
            'yesterday' => $yesterdaySales,
            'this_month' => $thisMonthSales,
            'last_month' => $lastMonthSales,
        ];

        return view('dashboard.index', compact('salesFigures'));
    }

    private function getSalesForDate($date)
    {
        return Product::whereDate('created_at', $date)->sum('price');
    }

    private function getSalesForMonth($date)
    {
        return Product::whereYear('created_at', $date->year)
            ->whereMonth('created_at', $date->month)
            ->sum('price');
    }
    }

