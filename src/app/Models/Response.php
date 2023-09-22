<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class Response extends Model
{
    use HasFactory, HasEagerLimit;

    protected $fillable = [
        'response_no',
        'name',
        'email',
        'content',
    ];
}
