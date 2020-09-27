<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $fillable =
    [
        'name',
        'id'
    ];

    public $timestamps = false;
}
