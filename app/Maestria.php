<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maestria extends Model
{
  protected $table = 'maestrias';

  protected $fillable = [

    'descripcion'];

  protected $hidden = ['created_at','updated_at'];

  public function medicos(){
    return $this->morphToMany('App\Medico', 'medicable');
  }

}
