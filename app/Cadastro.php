<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $fillable =['email', 'password'];
}

class User extends Model
{
    protected $table = 'users';

    public $timestamps = false;
}
