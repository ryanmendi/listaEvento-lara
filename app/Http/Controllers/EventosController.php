<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Eventos;
use Illuminate\Support\Facades\Redirect;


class EventosController extends Controller
{
    //mostrar home

    public function MostarHome()
    {
        return view('homeadm');
    }

    //cadastro evento

    public function MostarCadastroEvento()
    {
        return view('cadastroevento');
    }

    //salvar arquivos na tabela eventos

    public function CadastrarEventos (Request $request)
    {
        $registros = $ $request->validade([
            'nomeEvento'=>'string|required',
            'dataEvento'=>'date|required',
            'localEvento'=>'string|required',
            'imgEvento'=>'string|required'
        ]);

        Eventos::create($registros);
        return Redirect::route('home-adm');
    }

    // delete registro tabela evento
    public function destroy(Eventos $id)
    {
        $id->delete();
        return Redirect::route ('home-adm');
    }

    //alterar registros tabela evento
    public function update (Eventos $id, Request $request)
    {
        $registros = $ $request->validade([
            'nomeEvento'=>'string|required',
            'dataEvento'=>'date|required',
            'localEvento'=>'string|required',
            'imgEvento'=>'string|required'
        ]);
        $id->fill($registros);
        $id->save();

        return Redirect:: route ('home-adm');
    }

    //mostrar os eventos pelo codigo
    public function MostrarEventoCodigo(Evento $id)
    {
        return view ('altera-evento', ['registrosEvento'=>$id]);
    }

    // buscar evento pelo nome
    public function MostrarEventoNome(Request $request)
    {
        $registros = Eventos::query();
        $registros->when($request->nomeEvento,function($query,$valor){
            $query->where('nomeEvento','like','%'.$valor.'%');
        });
        $todosRegistros = $registros->get();
        return view ('listaEvento',['registrosEvento'=>$todosRegistros]);
    }
}
