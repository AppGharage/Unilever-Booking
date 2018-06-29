<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    protected $fillable = ['name', 'description'];
   
    use SoftDeletes;

    protected $dates = ['deleted_at'];
}
