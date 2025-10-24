<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krs extends Model
{
    protected $guarded = [
        "id",
    ];
    public function user() 
    {
        return $this->belongsTo(User::class);
    }

    public function matkuls() 
    {
        return $this->hasMany(Matkul::class);
    }
}
