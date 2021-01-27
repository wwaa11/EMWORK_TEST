<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class FindController extends Controller
{
    //
    public function index(){
        return view('findindex');
    }

    public function show(Request $request){
        $month = $request->month;
        $datas = Data::whereMonth('updated_at', $month)->get();
        $income = Data::whereMonth('updated_at', $month)->where('type' , 'รายรับ')->sum('amount');
        $pay = Data::whereMonth('updated_at', $month)->where('type' , 'รายจ่าย')->sum('amount');
        $total = $income - $pay;
        return view('findshow')->with('datas', $datas)->with('income' , $income)->with('pay' , $pay)->with('total' , $total);
    }

}
