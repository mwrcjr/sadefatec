<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // // Relacionamento um pra um com a tabela/classe Usuário(User)
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
