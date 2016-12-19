<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Fila extends Model
{

    public function planilla()
    {
        return $this->belongsTo(Planilla::class);
    }
}
