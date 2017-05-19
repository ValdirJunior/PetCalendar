<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $guard = 'web';
    protected $table = 'pets';

    protected $fillable = [
        'name', 'birthDate', 'sex', 'client_id','typepet_id',
    ];

    protected $casts = [
        'birthDate' => 'date',
        'client_id' => 'int',
        'typepet_id' => 'int',
    ];
}
