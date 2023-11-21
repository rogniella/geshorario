<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    protected $table = 'sedes';

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class, 'sede_id');
    }
}
