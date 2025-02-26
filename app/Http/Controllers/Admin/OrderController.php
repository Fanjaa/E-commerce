<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index(){
        $pending_orders = Orders::where('status', 'pending')->latest()->get();
        return view('admin.pendingorders', compact('pending_orders'));
    }
}
