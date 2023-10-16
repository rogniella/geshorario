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


    return view('profesores.registro'  );

  } // Fin registro 

  public function registro_graba(Request $request)
  {
      // Boton Aceptar de la vista registro

    $profe = User::where("name",$request->dni)->first();
    if (  ! $profe ){
      Flash::error("Error: No esta Registrado !! " );
      return view('profesores.registro'  );
    }

    $ret =  password_verify($request->password, $profe->password);
    if  ( !  $ret ) {
      Flash::error("Error: Clave Incorrecta !! " );
      return view('profesores.registro'  );
    } 
        
      $reg = new Asistencia();
      $reg->sede_id = 1; //temporal tiene que venir de la configuracion de la maquina
      $reg->profesor_id = $profe->id; 
      $reg->save();

      $datos =  (object) [ 'dni' => $request->dni ,
      'apellido' => $profe->apellidonombre,
      'ultima_salida' => "01/08/2023 14:00 hs" ,
      'ultimo_ingreso' => "01/08/2023 14:00 hs"  ];

      Flash::success("Se ha registrado de manera exitosa ! Id:" . $request->dni );
      return view('profesores.registro_confirmacion')->with('datos', $datos );
  
 
                  
  }

} // Fin Controller