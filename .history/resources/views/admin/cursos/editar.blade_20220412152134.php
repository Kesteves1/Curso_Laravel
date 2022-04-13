@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Editando Curso</h3>
            <div class="row">
                <form class="" method="POST" enctype="multipart/form-data" action="{{route('admin.cursos.atualizar', $registro->id)}}">
                        @csrf
                        @include('admin.cursos._form')
                        <input type="hidden" name="_method">

                </form>
            </div>
    </div>
@endsection
