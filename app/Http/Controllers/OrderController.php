<?php

namespace App\Http\Controllers;

use App\Models\Cancellation;
use App\Models\Order;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function success()
    {
        return view('orders.success');
    }
}
