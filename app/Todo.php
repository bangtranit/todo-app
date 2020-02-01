<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Todo extends Model
{
    use SoftDeletes;
    const NOT_COMPLETED = false;
    const HAS_COMPLETED = true;

    protected $fillable = [
        'name',
        'description',
        'completed'
    ];
    protected $primaryKey = 'id';
    protected $dates = ['deleted_at'];
}
