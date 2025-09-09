<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    public function funListarAjax(){
      $personas = Persona::get();//select * from personas
      return response()->json($personas);
    }
    public function funListar(){
        //esto es eloquent o ORM 
        //estamos trabajando con puro eloquent
        $personas = Persona::get();//y estan bien se puede hacer con select * from personas
        $usuarios = User::get();
        return view("admin.persona.listar",["personas" => $personas, "usuarios"=>$usuarios]);
                                             //esta enviando estos datos a la vista "admin.persona.listar"
    }
    public function funCrear(){
       return view("admin.persona.nuevo");
       // esta funcion va a retornar una vista que esta en la carpeta admi.persona.nuevo
    }
    public function funGuardar(Request $request){
      $persona = new Persona;
      $persona->nombres = $request->nombres;
      $persona->apellidos = $request->apellidos;
      $persona->ci = $request->ci;
      $persona->fecha_nac = $request->fecha_nac;
      $persona->save();

      return redirect("/persona");
    }
    public function funMostrar(){

    }

    public function funEditar($id){ //aqui es donde recibimos esa $id
        // en esa variable vamos a buscar el modelo persona
    $persona = Persona::find($id);       
                                        //esa persona lo renderizamos
     return view("admin.persona.editar",["persona"=> $persona]);
    }
                                // de quien modificamos "$id"//conque datos reemplazamos "Request $request"
    public function funModificar($id, Request $request){
        $persona = Persona::find($id);
        $persona->nombres = $request->nombres;
        $persona->apellidos = $request->apellidos;
        $persona->ci = $request->ci;
        $persona->fecha_nac = $request->fecha_nac;
        $persona->update();
  
        return redirect("/persona");  
    }
    public function funEliminar($id){//aqui es donde recibimos esa $id que queremos eliminar
         
      $persona= Persona::find($id);
      $persona->delete();
      return redirect("/persona");
    }

    public function asignarPersona($id, Request $request){
      $persona = Persona::find($id);
      $persona->user_id= $request->user_id;
      $persona->update();
      return redirect("/persona");
    }
}
