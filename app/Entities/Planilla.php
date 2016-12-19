<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Planilla extends Model
{

    public function filas()
    {
        return $this->hasMany(Fila::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }




}
