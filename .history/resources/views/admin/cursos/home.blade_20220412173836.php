@extends('layout.site')

@section('titulo', 'Contatos')

@section('conteudo')
    <div class="container">
        <h3 class="center">Lista de Cursos</h3>
        <div class="row">
            <div class="row">
                @foreach ($cursos as $curso)

                @endforeach
                <div class="col s12 m4">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{asset($curso->imagem)}}">
                            <img src="images/sample-1.jpg">
                            <span class="card-title">Card Title</span>
                        </div>
                        <div class="card-content">
                            <h4>
                                
                            </h4>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @endsection
