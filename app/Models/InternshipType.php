<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternshipType extends Model
{
	// Declaração para não usar os Timestamps
    public $timestamps = false;

    // Relacionamento um pra um com a tabela/classe Usuário(User)
    public function user()
    {
        return $this->hasOne('App\User');
    }
}
