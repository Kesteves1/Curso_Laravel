<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }
    public function entrar(request $req)
    {
        $dados = $req->all();
        if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']]))
        {
            return redirect()
        }
        return redirect()->route('login.index');
    }
}
