<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function new(Request $request){
        Log::info($request->data);
    }

    public function destroy(Request $request){
        dd($request->data);
    }

    public function pagar(Request $request){
        return $request->data;
    }

    public function finalizar(Request $request){
        return "form de finalizar!!";
    }
}
