<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParishionerAddress extends Model
{
    use HasFactory;

    public function parishioner()
    {
        return $this->belongsTo(Parishioner::class);
    }

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }
}
