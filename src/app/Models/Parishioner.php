<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parishioner extends Model
{
    use HasFactory;

    public function parishionerAddresses()
    {
        return $this->hasMany(ParishionerAddress::class);
    }
}
