<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
  protected $table = 'directors';

  protected $fillable = [
    'nombre',
    'apellido',
    'edad',
    'telefono',
    'email',
    'hospital_id'];

  protected $hidden = ['created_at','updated_at'];

  public function hospital(){
    return $this->belongsTo('App\Hospital', 'hospital_id');
  }
}
