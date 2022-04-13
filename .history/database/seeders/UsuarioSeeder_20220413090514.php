<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Seeder;
use App\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dados = [
            'name'    => "Kaio",
            'email'   => "admin@mail.com",
            'password'=> bcrypt("123456"),

        ];

        if(ModelsUser::where('email','=',$dados['email'])->count())
        {
            $usuario = ModelsUser::where('email','=',$dados['email'])->first();
            $usuario= update($dados);
            echo "Usuario Alterado!";
        } else {
            User::create($dados);
            echo "Usuario Criado!";
        }
    }
}
