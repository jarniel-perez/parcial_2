<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;
use App\Director;

class HospitalController extends Controller
{

public function index(){

    $hospital = Hospital::find(12);
    return $hospital->director;
}

  public function store(){
    Hospital::create(
      ['nombre'=>'Universitario', 'ciudad'=>'Monteria', 'direccion'=>'cra 23 4', 'telefono'=>'123456789', 'email'=>'universitarioh.monteria@minsalud.edu.co']);

    $hospital = Hospital::find(1);
    $hospital->director()->create([
      'nombre' => 'Pablo',
      'apellido' => 'Ramirez',
      'edad' => '40',
      'telefono' => '000001',
      'email' => 'pabloramirez@hotmail.com',
    ]);

    return $hospital->director;

  }

  public function update(){

    $hospital = Hospital::find(12);
    $hospital->update(['nombre'=>'Integral', 'ciudad'=>'Bogota', 'direccion'=>'alala123', 'telefono'=>'09876543', 'email'=>'hosptario.bogota@gmail.edu.c']);
    return $hospital;
  }

  public function update_2(){

    $hospital = Hospital::find(12);
    $hospital->director()->update([
      'nombre' => 'Teodoro',
      'apellido' => 'Pacho',
      'edad' => '28',
      'telefono' => '321321321',
      'email' => 'andrem@hotmil.com',
    ]);
    return $hospital->director;
  }

  public function destroy(){
    $hospital = Hospital::find(15);
    $hospital->destroy(15);
    return $hospital;
  }

  public function destroy_2(){
    $hospital = Hospital::find(17);
    $hospital->director()->delete(5);
    $hospital->destroy(17);
    return $hospital->director;
  }
}
