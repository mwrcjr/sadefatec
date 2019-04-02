<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    public function user()
    {
        // Relacionamento um pra um com a tabela/classe User(Aluno)
        return $this->belongsTo('App\User');
    }
}