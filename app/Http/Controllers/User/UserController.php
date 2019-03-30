<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Models\Course;
use App\Models\InternshipType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**Retorna a lista de Users */
    public function index()
    {
        //
    }

    /**Retorna o form de criação de User */
    public function create()
    {
        //
    }

    /**Salva um novo registro de User */
    public function store(Request $request)
    {
        //
    }

    /**Retorna a exibição de um User Específico */
    public function show(User $user)
    {
        //
    }

    /**Retorna o form de atualização de User */
    public function edit($id)
    {
        $user            = User::findOrFail($id);
        $courses         = Course::all();
        $internship_type = InternshipType::all();
        return view('user.edit',compact('user', 'courses', 'internship_type'));
    }

    /**Atualiza um registro de User q foi atualizado */
    public function update(Request $request, User $user)
    {
        $user = User::findOrFail($user->id);
        $user->name                = $request->name;
        $user->course_id           = $request->course_id;
        $user->internship_type_id  = $request->internship_type_id;
        $user->semester            = $request->semester;
        $user->year                = $request->year;
        $user->ra                  = $request->ra;
        $user->phone               = $request->phone;
        $user->step                 = 1;
        //dd($user);
        $user->save();
        
        return redirect('home');
    }

    /**Remove um registro de User especifico */
    public function destroy(User $user)
    {
        //
    }
}
