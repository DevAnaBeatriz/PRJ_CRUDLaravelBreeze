<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function queries()
    {
        $cliente=Clientes::all();
        return view('listar', compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cad=Clientes::create([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'origem' => $request->origem,
            'endereco' =>$request->endereco,
            'bairro' =>$request->bairro,
            'cep' =>$request->cep,
            'cidade' =>$request->cidade,
            'estado' =>$request->estado,
            'data_contato' => $request->data_contato,
            'observacao' => $request->observacao,
          ]);
          if($cad){
            return redirect('/listar');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $clientes=Clientes::find($id);
        return view('ver', compact('clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $clientes=Clientes::find($id);
        return view('editar', compact('clientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Clientes::where(['id'=>$id])->update([
            'nome' => $request->nome,
            'telefone' => $request->telefone,
            'origem' => $request->origem,
            'endereco' =>$request->endereco,
            'bairro' =>$request->bairro,
            'cep' =>$request->cep,
            'cidade' =>$request->cidade,
            'estado' =>$request->estado,
            'data_contato' => $request->data_contato,
            'observacao' => $request->observacao,
          ]);
            return redirect('/listar'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if( $cliente = Clientes::findOrFail($id)){
            $cliente->delete();}
            return redirect('/listar');
    }

    public function delete($id){
        $clientes=Clientes::find($id);
        return view('deletar', compact('clientes'));
    }

}
