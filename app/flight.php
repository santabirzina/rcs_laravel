<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
{
    protected $fillable = ['name', 'last_name', 'email', 'phone'];
}
