<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

use App\Models\asistencia; 
use App\Models\User; 

class ProfesoresController extends Controller
{

  public function registro ()  {

    //probar:  http://localhost/geshorario/public/profesores/registro

    $profe = User::where("perfil_id", 'PRO')->get();
    return view('profesores.registro')->with('profe', $profe);

  } // Fin registro 

  public function registro_graba(Request $request)
  {
      // Boton Aceptar de la vista registro

    $profes = User::where("perfil_id", 'PRO')->get();
    $profe = User::where("name",$request->dni)->first();
    if (  ! $profe ){
      Flash::error("Error: No esta Registrado !! " );
      return view('profesores.registro')->with('profe', $profes);
    }

    $ret =  password_verify($request->password, $profe->password);
    if  ( !  $ret ) {
      Flash::error("Error: Clave Incorrecta !! " );
      return view('profesores.registro')->with('profe', $profes);
    } 
        
      $reg = new Asistencia();
      $reg->sede_id = 1; //temporal tiene que venir de la configuracion de la maquina
      $reg->profesor_id = $profe->id; 
      $reg->save();

      $datos =  (object) [ 'dni' => $request->dni ,
      'apellido' => $profe->apellidonombre
        ];

      Flash::success("Se ha registrado de manera exitosa ! Id:" . $request->dni );
      return view('profesores.registro_confirmacion')->with('datos', $datos );
  
 
                  
  }

} // Fin Controller