<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data;

class DataController extends Controller
{
    //
    public function index(){

        $datas = Data::all();

        return view('createdata')->with('datas' , $datas);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'amount' => 'required|numeric',
            'type' => 'required',
        ]);

        $data = new Data;
        $data->name = $request->name;
        $data->type = $request->type;
        $data->amount = $request->amount;

        $data->save();

        $request->session()->flash('status', $request->name. ' is create sucessfully');

        return redirect('/home');
    }

    public function edit($id)
    {
        $data = Data::find($id);

        return view('editData')->with('data' , $data);
    }

    public function update(Request $request, $id)
    {
        $data = Data::find($id);

        $request->validate([
            'name' => 'required|max:255',
            'amount' => 'required|max:22|regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/',
            'type' => 'required',
        ]);

        $data->name = $request->name;
        $data->type = $request->type;
        $data->amount = $request->amount;

        $data->save();

        $request->session()->flash('status', $request->name. ' is create sucessfully');
        return redirect('/home');
    }

    public function destroy($id)
    {
        $data = Data::find($id);

        $dataname = $data->name;
        $data->delete();

        Session()->flash('status',$dataname. " is delete successfully");
        return redirect('/home');
    }
}
