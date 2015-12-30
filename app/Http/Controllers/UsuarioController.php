<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Response;
use DB;
use App\Http\Controllers\Controller;

//Modelos
use App\Usuario;

class UsuarioController extends Controller
{

    public function __construct()
    {
        $this->middleware('login', ['except' => ['getLogin','postLogear']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getLogin(Request $request)
    {
        $request->session()->forget('id');
        return \View::make('usuario/login');
    }

    public function postLogear(Request $request)
    {
        $nombre = $request->input('nombre');
        $usuario = Usuario::where('nombre', $nombre)
        ->first();

        if($usuario){
         $request->session()->put('id', $usuario->id);
         return redirect("usuario/index");
     }else{
        echo "Usuario no existe";
    }
}

public function getIndex()
{
    $this->middleware('login');
    $usuarios = Usuario::all();
    return \View::make('usuario/index',['usuarios' => $usuarios]);
}


public function getConsulta(Response $response)
{   
    $consulta = DB::select('select * from usuarios');
    //print_r($consulta);
    //foreach ($consulta as $usuario) {
    //    echo $usuario->nombre."<br>";
    //}
    return Response::json($consulta);
}

public function getIngreso()
{
    return \View::make('usuario/ingreso');
}

public function postIngresar(Request $request)
{
    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');
    $usuario = new Usuario;
    $usuario->nombre = $nombre;
    $usuario->apellido = $apellido;
    if($usuario->save()){
        return redirect('usuario/index');
    }else{
        echo "el usuario ya ha sido ingresado anteriormente";
    }
    
}

public function getEdicion($id = 0)
{
    if($id != 0)
    {
        $usuario = Usuario::where('id', $id)
        ->first();
        if($usuario)
        {
            return \View::make('usuario/edicion',['usuario' => $usuario]);
        }else
        {
            echo "error, usuario no existe";
        }
    }else{
        echo "error, usuario no existe";
    }
}

public function postEditar(Request $request)
{
    $id = $request->input("id");
    $nombre = $request->input("nombre");
    $apellido = $request->input("apellido");
    $usuario_modificado['nombre'] = $nombre;
    $usuario_modificado['apellido'] = $apellido;
    $usuario = Usuario::where('id', $id)
    ->update($usuario_modificado);
    return redirect('usuario/edicion/'.$id);
}

public function getEliminar($id = 0)
{
    if($id != 0)
    {
        $usuario = Usuario::where('id', $id);
        $usuario->delete();
        return redirect('usuario/index');
    }else{
        echo "error, usuario no existe"; 
    }
}
}
