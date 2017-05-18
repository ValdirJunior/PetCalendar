<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypePet extends Model
{
    protected $table = 'typepets';

    protected $fillable = [
        'name', 'description',
    ];

}
