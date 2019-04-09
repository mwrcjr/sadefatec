<?php

namespace App\Http\Controllers\Data;

use App\User;
use App\Models\Data;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    
    public function index()
    {
        return view('data.index');
    }

    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        $data = Data::create($request->all());
        $data->user_id = Auth()->user()->id;
        $store = $data->save();
        if($store){
            $user       = User::findOrFail(Auth()->user()->id);
            $user->step = 2;
            $user->save();
            return redirect('data');
        }

        return redirect('data');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function print()
    {
        return view('data.print'); 
    }

    public function upstatus($i)
    {
        //dd($i);
        if ($i == "c") {
            data::where('user_id', Auth()->user()->id)->update(['status' => 'check']);
            return redirect()->route('data.print');
        }elseif ($i == "i") {
            data::where('user_id', Auth()->user()->id)->update(['status' => 'create']);
            return redirect()->route('data.print');
        }elseif ($i == "s") {
            data::where('user_id', Auth()->user()->id)->update(['status' => 'saved']);
            //return redirect()->route('data.print');
        }elseif ($i == "p") {
            data::where('user_id', Auth()->user()->id)->update(['status' => 'print']);
            //return redirect()->route('data.print');
        }elseif ($i == "o") {
            data::where('user_id', Auth()->user()->id)->update(['status' => 'ok']);
            //return redirect()->route('data.print');
        }else{
            return redirect()->route('data.print');
        }
    }
}
