<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class bagian extends Model
{
    use SoftDeletes;
    protected $guarded = [];
}
