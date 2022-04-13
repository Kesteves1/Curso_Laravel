<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use App\Models\Curso;

class ContatoController extends Controller
{
    public function index($id=null)
    {


        $registros= Curso::all();
        return view('admin.cursos.index', compact('registros'));

        return view('contato.index', compact( 'registros'));
    }
    public function adicionar()
    {
        return view('admin.cursos.adicionar');
    }
    public function criar(Request $req)
    {
        dd($req['nome']);
        return "Esse é o criar do ContatoController";
    }
    public function editar($id)
    {
            return "<p>Editar $id</p>";
    }
    public function cursos()
    {
        $registros= Curso::all();
        return view('contato.index', compact( 'registros'));
    }
    public function salvar(Request $req)
    {
        $dados = $req->all();
        if($req->hasFile('imagem'))
        {
            $imagem=$req->file('imagem');
            $num= rand(1111,9999);
            $dir = "img/cursos/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "imagem_".$num.".".$ex;
            $imagem->move($dir,$nomeImagem);
            $dados['imagem'] = $dir."/".$nomeImagem;
        }
        Curso::create($dados);
    }
    public function atualizar($id=null)
    {
        return "<p>Atualizar$id</p>";
    }
    public function deletar($id=null)
    {
        return "<p>Delete $id</p>";
    }
    public function admin()
    {
        "<p>TELA ADMIN</p>";
    }
}
