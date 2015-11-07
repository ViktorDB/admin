<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $attributes = [
        'id',
        'username',
        'firstname',
        'lastname',
        'email',
        'password'

    ];

    protected $table = 'users';
}
