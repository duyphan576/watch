<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller {
    public function index(Request $request) {
        $dayRevenue = Order::select(DB::raw('SUM(TotalPrice) as total'))->where('Date', date('Y-m-d'))->first();
        $dayRevenue = $dayRevenue->total ? $dayRevenue->total : 0;
        $monthRevenue = Order::select(DB::raw('SUM(TotalPrice) as total'))->where(DB::raw('YEAR(Date)'), date('Y'))->where(DB::raw('MONTH(Date)'), date('m'))->first();
        $monthRevenue = $monthRevenue->total ? $monthRevenue->total : 0;
        $bestSeller = OrderDetail::select('ProductID')->groupBy('ProductID')->orderBy(DB::raw('COUNT(ProductID)'), 'desc')->limit(1)->first();
        $bestSeller = Product::find($bestSeller)->first();
        $vipCustomer = Order::select('UserID')->groupBy('UserID')->orderBy(DB::raw('COUNT(UserID)'), 'desc')->limit(1)->first();
        $vipCustomer = User::find($vipCustomer->UserID);
        $revenueFilter = null;
        if($request->has('month')) {
            $revenueFilter = Order::select('Date', DB::raw('COUNT(OrderID) as totalOrder, SUM(TotalPrice) as totalPrice'))->where(DB::raw('YEAR(Date)'), date('Y', strtotime($request->month)))->where(DB::raw('MONTH(Date)'), date('m', strtotime($request->month)))->groupBy('Date')->orderBy('Date', 'desc')->get();
        }
        return view('admin.dashboard.dashboard', [
            'dayRevenue' => $dayRevenue,
            'monthRevenue' => $monthRevenue,
            'bestSeller' => $bestSeller,
            'vipCustomer' => $vipCustomer,
            'revenueFilter'=> $revenueFilter,
        ]);
    }
}
