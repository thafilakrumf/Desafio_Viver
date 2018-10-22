<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    // Fillable - define quais os campos que podem ser inseridos pelo usuário do sistema no Banco
    protected $fillable = ['name','sobrenome','aniversario','email','password'];

    // Guarded protege os campos de inserções. Ele impede que alguém insira dados em alguns campos da nossa tabela.
    protected $guarded = ['id', 'created_at', 'update_at'];

    protected $table = 'client';
}
