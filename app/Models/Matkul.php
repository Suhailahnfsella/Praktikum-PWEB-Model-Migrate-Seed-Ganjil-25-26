<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    protected $guarded = [
        "id"
    ];

    public function krs() 
    {
        return $this->belongsTo(Krs::class);
    }
}
