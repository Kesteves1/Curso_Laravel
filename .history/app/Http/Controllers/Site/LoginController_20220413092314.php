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
        if(Auth:attempt(['email']))
        return redirect()->route('login.index');
    }
}
