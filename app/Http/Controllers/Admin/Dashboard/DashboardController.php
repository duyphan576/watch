<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
    public function index() {
        $dayRevenue = Order::select(DB::raw('SUM(TotalPrice) as total'))->where('Date', date('Y-m-d'))->first();
        $dayRevenue = $dayRevenue->total ? $dayRevenue->total : 0;
        $monthRevenue = Order::select(DB::raw('SUM(TotalPrice) as total'))->where(DB::raw('YEAR(Date)'), date('Y'))->where(DB::raw('MONTH(Date)'), date('m'))->first();
        $monthRevenue = $monthRevenue->total ? $monthRevenue->total : 0;
        return view('admin.dashboard.dashboard', [
            'dayRevenue' => $dayRevenue,
            'monthRevenue' => $monthRevenue,
        ]);
    }
}
