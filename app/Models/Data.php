<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
    
        'policy','insurer','rg','cpf',
		'street','number','district','city','state','complement','phonerec','phonehome',
        'company','cnpj','cstreet','cnumber','cdistrict','ccity','cstate','cphone','cemail','cagent','cagentrg','responsible','agreement',
		'supervisor','supervisorrole','semail','sphone','istreet','inumber','idistrict','icity','istate','initialdate','enddate','initialtime','endtime','acting','payment','activities','status',
	];

    public function user()
    {
        // Relacionamento um pra um com a tabela/classe User(Aluno)
        return $this->belongsTo('App\User');
    }
}
