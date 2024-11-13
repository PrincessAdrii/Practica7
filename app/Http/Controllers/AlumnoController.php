<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Carrera;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public $val;

    public function __construct(){
        $this->val=[
            'noctrl'    =>['required','min:8'],
            'nombre'    =>['required','min:3'],
            'apellidoP' =>['required'],
            'apellidoM' =>['required'],
            'sexo'      =>['required'],
            'idCarrera'      =>['required'],

        ];
    }

    public function index()
    {
        $alumnos= Alumno::paginate(5);
        return view("Alumnos2.index",compact("alumnos"));
    }

    public function create()
    {
        $alumnos= Alumno::paginate(5); 
        $alumno=new Alumno;
        $carreras=Carrera::all();

        $accion='C';
        $txtbtn='Guardar';
        $des='';
        return view("Alumnos2/form",compact("alumnos",'alumno',"accion",'txtbtn','des','carreras'));
    }

   
    public function store(Request $request)
    {
        // var_dump($request)
       $val= $request->validate($this->val);
        Alumno::create($val);
        return redirect()->route('Alumnos2.index')->with("mensaje",'se inserto correctamente.');
    }

 
    public function show(Alumno $alumno)
    {
        $alumnos=Alumno::Paginate(5);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $carreras= [Carrera::find($alumno->idCarrera)];
       
        $des='disabled';
        return view("Alumnos2.form",compact('alumnos','alumno','accion','txtbtn','des','carreras'));
    }

  
    public function edit(Alumno $alumno)
    {   
        // Obtener todas las carreras para mostrarlas en el dropdown
        $carreras = Carrera::all();
        $alumnos = Alumno::paginate(5);
        
        $accion = 'E';
        $txtbtn = 'actualizar';
        $des = '';

        return view("Alumnos2.form", compact('alumnos', 'alumno', 'accion', 'txtbtn', 'des', 'carreras'));
    }


  
    public function update(Request $request, Alumno $alumno)
    {   
       
        $val= $request->validate($this->val);
        $alumno->update($val);
        return redirect()->route('Alumnos.index');
    }
 
   
    public function destroy(Alumno $alumno)
{
    $alumno->delete();
    return redirect()->route('Alumnos.index');
}

}
