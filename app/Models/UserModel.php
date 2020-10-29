<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    protected $table = "usser";
    protected  $filliable = [
        'id',
        'name',
        'email',
        'number'
    ];
}
