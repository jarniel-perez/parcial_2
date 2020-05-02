<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico;
use App\Paciente;

class MedicoController extends Controller
{
  public function index(){

      $medico = Medico::find(0);
      return $medico->pacientes;
  }

    public function store(){
      Medico::create(
        ['nombre'=>'Carolina',
        'apellido'=>'Rosales',
        'edad'=>'22',
        'sexo'=>'femenino',
        'telefono'=>'11111',
        'email'=>'carorosas@gmail.com',
        'hospital_id'=>'12']);

      $medico = Medico::find(1);
      $medico->pacientes()->createMany([
        ['nombre' => 'Pablo',
        'apellido' => 'Ramirez',
        'edad' => '40',
        'sexo' => 'masculino',
        'historia_clinica' => 'tiene poca vida',
        'telefono' => '999999',
        'email' => 'pabloramirez@hotmail.com'],
        ['nombre' => 'Maria',
        'apellido' => 'Mercedes',
        'edad' => '32',
        'sexo' => 'femenino',
        'historia_clinica' => 'estado critico',
        'telefono' => '343434',
        'email' => 'mame@hotmail.com'],
      ]);

      return $medico->pacientes;

    }

    public function update(){

      $medico = Medico::find(1);
      $medico->update([
        'nombre'=>'pacheco',
        'apellido'=>'gutierrez',
        'edad'=>'56',
        'sexo'=>'masculino',
        'telefono'=>'1234',
        'email'=>'gutierrez@gmail.com',
        'hospital_id'=>'12']);

        return $medico;
    }

    public function update_2(){

      $medico = Medico::find(1);
      $medico->pacientes()->find(2)->update([
        'nombre' => 'Pamela',
        'apellido' => 'Mercedes',
        'edad' => '39',
        'sexo' => 'femenino',
        'historia_clinica' => 'estado critico',
        'telefono' => '123456777',
        'email' => 'mame@hotmail.com'
      ]);
      return $medico()->pacientes;
    }

    public function destroy(){
      $medico = Medico::find(15);
      $medico->destroy(15);
      return $medico;
    }

    public function destroy_2(){
      $medico = Medico::find(1);
      $medico->pacientes()->delete(1, 2);
      $medico->destroy(1);
      return $medico->pacientes;
    }



    public function store_2(){
      Medico::create(
        ['nombre'=>'Carolina',
        'apellido'=>'Rosales',
        'edad'=>'22',
        'sexo'=>'femenino',
        'telefono'=>'11111',
        'email'=>'carorosas@gmail.com',
        'hospital_id'=>'1']);

      $medico = Medico::find(1);
      $medico->maestrias()->createMany([
        ['descripcion' => 'medicina general'],
        ['descripcion' => 'cirugia plastica'],
      ]);

      return $medico->maestrias;

    }


    public function store_3(){
      Medico::create(
        ['nombre'=>'jose',
        'apellido'=>'molina',
        'edad'=>'45',
        'sexo'=>'maculino',
        'telefono'=>'3453',
        'email'=>'josem@gmail.com',
        'hospital_id'=>'1']);

      $medico = Medico::find(2);
      $medico->doctorados()->createMany([
        ['descripcion' => 'optica'],
        ['descripcion' => 'pediatria'],
      ]);

      return $medico->doctorados;

    }

    public function relacionar(){
      $medico = Medico::find(2);
      $medico->maestrias()->attach([1,2]);
      return $medico->maestrias;

    }

    public function update_morfica(){

      $medico = Medico::find(1);
      $medico->maestrias()->find(2)->update([
        'descripcion' => 'cirugia estetica']);
      return $medico->maestrias;
    }

    public function destroy_morfica(){
      $medico = Medico::find(2);
      $medico->doctorados()->delete(1, 2);
      return $medico->doctorados;
    }

}
