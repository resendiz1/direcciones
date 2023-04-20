<?php

namespace App\Http\Controllers;

use App\Models\Trabajador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class trabajadorController extends Controller
{
    
    public function create(){
        return view('gestion.agregar');
    }



    public function store(){



        
            //Falta la validación
            Trabajador::create([
                'nombre' => request('nombre'),
                'puesto' =>request('puesto'),
                'correo' =>request('correo'),
                'celular ' =>request('telefono'),
                'extencion' => request('extencion'),
                'planta' =>request('planta')
            ]);

        return back()->with('agregado', 'Trabajador agregado con exito');   


    }




    public function buscar(){

        $query = request('buscado');
        $resultado = DB::select("SELECT*FROM TRABAJADORES WHERE nombre LIKE '%$query%' or correo LIKE '%$query%' ");
        return view('ver',compact('resultado'));    
    }


    public function gestion(){
        $resultado = DB::select('SELECT*FROM TRABAJADORES');
        return view('gestion.gestion', compact('resultado'));
    }


    public function delete(Trabajador $trabajador){
        $trabajador->delete();
        return back()->with('eliminado', 'El trabajador fue eliminado');
    }

    public function editar(Trabajador $trabajador){
        return view('gestion.editar', compact('trabajador'));
    }



    //Metodo que ayuda a actualizar el codigo
    public function actualizar(Trabajador $trabajador){

        $trabajador->update([
            'nombre' => request('nombre'),
            'puesto' => request('puesto'),
            'correo' => request('correo'),
            'celular' => request('celular'),
            'extencion' =>request('extencion'),
            'planta' => request('planta')

        ]);


        return redirect()->route('gestion');
    }


    // public function codigo(){
    //     return md5(request('codigo'));
    // }



//Codigo que envia el codigo por correo para  confirmar su numero de celular
    public function codigo(Request $request){


     
       
        $codigo = md5($request->codigo);
        $correo = $request->codigo;
        $subject = "Código de seguridad";
        $for = $correo;        
        $trabajador =  DB::select("SELECT*FROM trabajadores WHERE correo LIKE '$correo' LIMIT 1");
        $nombre =  $trabajador[0]->nombre;


        //Funcion que anda mandando los emails, solo es esta funcion y la configuracion del .ENV y con eso jala 
        Mail::send('email',compact('codigo', 'nombre'), function($msj) use($subject,$for, $correo)
        {
            $msj->from($correo, 'Grupo PABSA');
            $msj->subject($subject);
            $msj->to($for);
            
    
        });

        
    
         return view('ver', compact('trabajador'))->with("codigo", "El código fue enviado a $request->codigo");

    }





//Metodo que me ayuda a comprobar que el codigo es correcto
    public function celular(Trabajador $trabajador){
        $codigo = md5($trabajador->correo);
        $codigo_usuario = request('codigo');

        if($codigo == $codigo_usuario){

            $trabajador->update([
                'celular' => request('celular')
            ]);

            $datos_trabajador = DB::select("SELECT*FROM trabajadores WHERE correo LIKE '$trabajador->correo' LIMIT 1");

            return view('ver',compact('datos_trabajador'))->with("success", "Número de celular agregado <br> <b> ¡Muchas Gracias! </b>");

        }
        else{
            return back()->with('error', 'El código es incorrecto');
        }

    }

//metodo que me lleva a la vista login
    public function login(){
        return view('login.login');
    }



//metodo del login
    public function entrar(){
        
         $credenciales = request()->only('email', 'password');

        if(Auth::attempt($credenciales)){
            request()->session()->regenerate();
            return redirect()->route('inicio')->with('logeado', 'Iniciaste sesión, ahora podras: ');
        }


        return back()->with('error', 'Acceso Incorrecto');



    }



}
