<style>
    .valor{
        display: none;

    }
    .star:hover{
        color: #ffff00;
        cursor: pointer;
    }

</style>
{!! Form::open(array('route' =>'ratings.store','id'=>'myForm', 'method'=>'post')) !!}

    {!! Form::hidden('movie_id', $pelicula->id) !!}
    {!! Form::hidden('user_id',  Auth::id()) !!}

    <input type="hidden" name="value" value="" id="calificacion"/>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">1</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">2</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">3</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">4</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">5</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">6</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">7</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">8</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">9</span></span>
    <span class="glyphicon glyphicon-star star" aria-hidden="true"><span class="valor">10</span></span>

{!! Form::close() !!}

<script>
    var review = document.getElementById("calificacion");
    var botones = document.getElementsByClassName("star");
    var formulario = document.getElementById("myForm");
    var nums_stars = document.getElementById("num_stars");
    for(var i =0; i< botones.length; i++){
        botones[i].addEventListener("click", enviarForm);
        botones[i].addEventListener("mouseover", pintarCalificacion);
        botones[i].addEventListener("mouseout", despintarCalificacion);
    }
    function pintarCalificacion(e){
        for(var i = 0; i < parseInt(e.target.children[0].innerHTML); i++ ){
            botones[i].style.color = "orange";
            num_stars.innerHTML = e.target.children[0].innerHTML+' '+'Estrellas';
        }
    }
    function despintarCalificacion(e){
        for(var i = 0; i < parseInt(e.target.children[0].innerHTML); i++ ){

            botones[i].style.removeProperty('color');
        }
        pintarPromedio();
        num_stars.innerHTML ="0 Estrellas";
    }
    function enviarForm(e){
        review.value = parseInt(e.target.children[0].innerHTML);

        formulario.submit();
    }
</script>
