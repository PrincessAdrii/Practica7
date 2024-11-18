<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Depto;
use App\Models\Puesto;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public $val;
    public function __construct(){
        $this->val=[
         
        'RFC' =>['required','min:12'],
        'nombre' =>['required'],
        'apellidoP' =>['required'],
        'apellidoM' =>['required'],
        'licenciatura' =>['nullable'],
        'lictit' => ['nullable', 'boolean'],
        'especializacion' => ['nullable'],
        'esptit' => ['nullable', 'boolean'],
        'maestria'  =>['nullable'],
        'maetit' => ['nullable', 'boolean'],
        'doctorado'  =>['nullable'],
        'doctit' => ['nullable', 'boolean'],
        'fechaIngSep' => ['nullable', 'date'],
        'fechaIngIns' => ['nullable', 'date'],
        'idDepto'       => ['required', 'exists:deptos,idDepto'],
        'idPuesto'      =>['required','exists:puestos,idPuesto'],

        ];
    }

    public function index()
    {
        $personales = Personal::paginate(2);
        return view('Personal.index', compact('personales'));
    }

    
    public function create()
    {
        $personales= Personal::paginate(2); 
        $personal=new Personal;
        $deptos=Depto::all();
        $puestos=Puesto::all();

        $accion='C';
        $txtbtn='Guardar';
        $des='';
        return view("Personal/form",compact("personales",'personal',"accion",'txtbtn','des','deptos','puestos'));
    } 

   
    public function store(Request $request)
{
   $val= $request->validate($this->val);
   $val['idPersonal'] = fake()->bothify("####");
   Personal::create($val); 
   return redirect()->route('Personal.index')->with('success', 'Personal creado con éxito.');
}


    
    public function show(Personal $personal)
    {
        $personales=Personal::Paginate(2);
        $accion='D';
        $txtbtn='confirmar la eliminacion';
        $deptos = Depto::all();
        $puestos = Puesto::all();
       
        $des='disabled';
        return view("Personal.form",compact("personales",'personal',"accion",'txtbtn','des','deptos','puestos'));
    }

    
    public function edit(Personal $personal)
    { 
       
        $deptos = Depto::all();
        $puestos = Puesto::all();
        $personales = Personal::paginate(2); 
         
        $accion = 'E';
        $txtbtn = 'actualizar';
        $des = '';
        return view("Personal.form",compact("personales",'personal',"accion",'txtbtn','des','deptos','puestos'));
    }

    
    public function update(Request $request, Personal $personal)
    {
        $val= $request->validate($this->val);
        $personal->update($val);
        return redirect()->route('Personal.index');
    }

    public function destroy(Personal $personal)
    {
        $personal->delete();
        return redirect()->route('Personal.index')->with('success', 'Personal eliminado con éxito.');
    }
}
