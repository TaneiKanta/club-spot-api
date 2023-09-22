<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Staudenmeir\EloquentEagerLimit\HasEagerLimit;

class Thread extends Model
{
    use HasFactory, HasEagerLimit;

    protected $fillable = [
        'title',
        'name',
        'email',
        'content',
    ];

    public function responses()
    {
        return $this->hasMany(Response::class);
    }
}
