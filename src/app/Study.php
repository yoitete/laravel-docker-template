<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{

    protected $table = 'studys';

    protected $fillable = [
        'content',
    ];
}