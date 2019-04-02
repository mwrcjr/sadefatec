<?php

namespace App\Http\Controllers\Data;

use App\User;
use App\Models\Course;
use App\Models\InternshipType;
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
        //
    }

    public function show(Data $data)
    {
        //
    }

    public function edit(Data $data)
    {
        //
    }

    public function update(Request $request, Data $data)
    {
        //
    }

    public function destroy(Data $data)
    {
        //
    }
}
