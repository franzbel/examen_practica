@extends('app')
@section('estilo')
    <style>
        #form_review{
            display: none;
            
        }
        #form_rating{
            /*float: left;*/
        }
        #btn-review{
            /*float: left;*/
        }
    </style>
@endsection

@section('script')
    <script>
        function pintarPromedio(){
            var pro = parseInt(document.getElementById("promedio").innerHTML);
            var estrellas = document.getElementsByClassName("star");
            for(var i = 0; i < pro; i++){
                estrellas[i].style.color = "yellow";
            }
        }
        function mostrarForm(){
            var  boton = document.getElementById("btn-review");
            var formulario = document.getElementById("form_review");
            boton.addEventListener("click", MouseClick);
            function MouseClick(e){
                formulario.style.display = "initial";
            }
        }

        function cargarFunciones(){
            pintarPromedio();
            mostrarForm();
        }

        window.onload = cargarFunciones;
    </script>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">PELICULA</div>

                    <div class="panel-body">
                        @include('movies.partials.errores')

                        <div>
                            {{$pelicula->name}}
                        </div>
                        <div>
                            {{$pelicula->description}}
                        </div>
                        <hr/>

                        <button type="button" class="btn btn-info" id="btn-review">Añadir comentario</button>
                        <div id="form_rating">
                            @include('movies.partials.form_rating')
                        </div>
                        <div id="inf_rating">
                            <div>Calificar:: <span id="num_stars">0 Estrellas></span></div>
                            <span>Calificacion: </span><span id="promedio">{{$promedio}}</span><span>/10</span>
                            <div>votos: {{$votos}} </div>


                        </div>
                        <div id="form_review">
                            @include('movies.partials.form_review')
                        </div>

                        <hr/>
                        <p>COMENTARIOS</p>
                        <ul>
                            @foreach($pelicula->reviews as $review)
                                <li>{{$review->content}}</li>
                                @include('movies.partials.like')
                                @include('movies.partials.dislike')
                            @endforeach
                        </ul>

                    </div>
                    <a href="{{route('movies.index')}}">Lista de peliculas</a>
                </div>
            </div>
        </div>
    </div>
@endsection

