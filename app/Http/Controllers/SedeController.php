<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sede;  // Asegúrate de importar el modelo Sede

class SedeController extends Controller
{
    public function index()
    {
        // Lógica para mostrar todas las sedes
        $sedes = Sede::all();
        return view('sedes.index', compact('sedes'));
    }
    public function mostrarAsistencias($id)
    {
        $sede = Sede::with('asistencias.usuario')->find($id);
       

        return view('sedes.mostrar_asistencias', compact('sede'));
    }
}

// primer index() que se hizo para sedes
    /* 
    public function index()
    {
    // Obtén la lista de sedes con información relacionada
    $sedes = Sede::join('asistencias', 'sedes.id', '=', 'asistencias.sede_id')
                  ->join('users', 'asistencias.profesor_id', '=', 'users.id')
                  ->select('sedes.id', 'sedes.nombre', 'users.name as profesor_nombre', 'asistencias.created_at as ultima_asistencia')
                  ->groupBy('sedes.id', 'sedes.nombre', 'users.name', 'asistencias.created_at') 
                  ->get();

    // Renderiza la vista 'sedes.index' y pasa las sedes como datos
    return view('sedes.index', compact('sedes'));
    }
    */