<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  protected $table = 'pacientes';

  protected $fillable = [
    'nombre',
    'apellido',
    'edad',
    'sexo',
    'historia_clinica',
    'telefono',
    'email',
    'medico_id'];

  protected $hidden = ['created_at','updated_at'];

  public function medico(){
    return $this->belongsTo('App\Medico', 'medico_id');
  }

  public function medicamentos(){
    return $this->belongsToMany('App\Medicamento');
  }
}
