<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Atributos que podem ser salvos pelo metodo create.
     */
    protected $fillable = [
        'name', 'email', 'password', 'permission', 'status', 'step', 'notes',
        'course_id', 'internship_type_id', 'semester', 'year', 'ra', 'phone',
    ];
    /**
     * Atributos que são escondidos no arrays de retorno.
     */
    protected $hidden = [
        'password', 'remember_token', 'permission', 'status',
    ];

    public function course()
    {
        // Relacionamento um pra um com a tabela/classe Course(Curso)
        return $this->belongsTo('App\Models\Course');
    }

    public function internship_type()
    {
        // Relacionamento um pra um com a tabela/classe InternshipType(Tipo de Estagio)
        return $this->belongsTo('App\Models\InternshipType');
    }

    // Relacionamento um pra um com a tabela/classe Usuário(User)
    public function data()
    {
        return $this->hasOne('App\Models\Data');
    }
}
