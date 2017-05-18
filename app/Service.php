<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guard = 'petshop';
    protected $table = 'services';

    protected $fillable = [
        'name', 'description', 'value', 'petshop_id', 'typepet_id',
    ];

    protected $casts = [
        'value' => 'float',
        'petshop_id' => 'int',
        'typepet_id' => 'int',
    ];
}
