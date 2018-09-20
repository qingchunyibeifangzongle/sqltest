<?php

namespace App\Models\Sqltest;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';
    protected $fillable = ['name' , 'age'];
}
