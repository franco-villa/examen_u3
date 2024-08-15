<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use DB;
use App\Models\Cliente;
use App\Http\Requests\CreateClienteRequest;

class ClientesController extends Controller
{

    public function index()
    {
        $clientes = Cliente::orderBy('nombres','asc')->simplePaginate(2);
        return view('clientes', compact('clientes'));
    }

    public function show($id){        

        return view('show',[
            'cliente' =>  Cliente::find($id)
        ]);       
    }

    public function create(){        
        return view('create',[
            'cliente' => new Cliente
        ]);       
    }

    public function store(CreateClienteRequest $request)
    {        
        // Calcular el promedio
        //$fechaRegistro = date('Y-m-d');

        // Crear el alumno con los valores calculados
        Cliente::create([
            'nombres' => $request->input('nombres'),
            'email' => $request->input('email'),
            'direccion' => $request->input('direccion'),
            'fono' => $request->input('fono')
        ]);

        return redirect()->route('clientes.index');          
    }


    public function edit(Cliente $cliente){        
        return view('edit',[
            'cliente' => $cliente
        ]);       
    }

    public function update(Cliente $id, CreateClienteRequest $request ){        
        
        $id->update($request->validated());

        return redirect()->route('clientes.show',$id);       
    }
    
    public function destroy(Cliente $cliente){        
        $cliente->delete();
        return redirect()->route('clientes.index');        
    }
    // public function servicios(){
    //     $servicios = DB::table('servicios')->get();
    //     return view('servicios', compact('servicios'));
    // }
}
