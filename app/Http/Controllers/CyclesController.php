<?php

namespace App\Http\Controllers;

use App\Models\Cycles;
use Illuminate\Http\Request;

class CyclesController extends Controller {
    public function getOrders(Request $request) {

        $orders = Cycles::create($request->all());

        return response()->json($orders);
    }

    public function getLast() {
        $query = Cycles::latest('id')->first();
        return response()->json($query);
    }
}
