<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $fillable = 'name';
    public const IS_ADMIN = 0;
    public const IS_USER = 1;
    public const IS_MANAGER = 2;
    //
}
