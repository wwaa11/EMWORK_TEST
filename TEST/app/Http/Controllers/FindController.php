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
        $request->validate([
            'dateStart' => 'required',
            'dateEnd' => 'required'
        ]);
        $dateStart = date("Y-m-d H:i:s", strtotime($request->dateStart.' 00:00:00 '));
        $dateEnd = date("Y-m-d H:i:s", strtotime($request->dataEnd.' 23:59:59 '));
        $sales = Data::whereBetween('updated_at', [$dateStart, $dateEnd])->where('sale_status', 'success');

        return view('report.showreport')->with('dateStart' , date("d/m/Y H:i:s", strtotime($request->dateStart.' 00:00:00 ')))->with('dateEnd', date("d/m/Y H:i:s", strtotime($request->dataEnd.' 23:59:59 ')))->with('totalSale', $sales->sum('total_price'))->with('sales', $sales->paginate(5));
    }

}
