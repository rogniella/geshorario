<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use App\Models\profesor;  

class ProfesoresController extends Controller
{

  public function registro ()  {

    //probar:  http://localhost/geshorario/public/profesores/registro

    return view('profesores.registro'  );

  } // Fin registro 

  public function registro_graba(Request $request)
  {
      // Boton Aceptar de la vista registro

     // $datos = profesor::buscarDni($request->dni);

     $datos =  (object) [ 'dni' => $request->dni ,
                'apellido' => "Juan Perez",
                'ultimo_ingreso' => "01/08/2023 14:00 hs"  ];
      
     return view('profesores.registro_confirmacion', [ 'datos' => $datos ]  );          


  }


} // Fin Controller