<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
  protected $table = 'medicos';

  protected $fillable = [
    'nombre',
    'apellido',
    'edad',
    'sexo',
    'telefono',
    'email',
    'hospital_id'];

  protected $hidden = ['created_at','updated_at'];

  public function hospital(){
    return $this->belongsTo('App\Hospital', 'hospital_id');
  }

  public function pacientes(){
    return $this->hasMany('App\Paciente');
  }

  public function maestrias(){
    return $this->morphedByMany('App\Maestria', 'medicable');
  }

  public function doctorados(){
    return $this->morphedByMany('App\Doctorado', 'medicable');
  }
}
