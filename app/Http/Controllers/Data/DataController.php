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
}
