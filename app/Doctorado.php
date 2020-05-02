<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctorado extends Model
{
  protected $table = 'doctorados';

  protected $fillable = [

    'descripcion'];

  protected $hidden = ['created_at','updated_at'];

  public function medicos(){
    return $this->morphToMany('App\Medico', 'medicable');
  }

}
