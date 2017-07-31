@extends('master')

@section('contenido')
@include('flash::message')

<div class="jumbotron">
  <h1>Sistema De Administracion De Proyectos</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, cupiditate iste. Porro deserunt illum non, maiores nemo fugit, culpa quis sed quasi animi, ab rerum quia iure eum ipsam laborum? sLorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis accusantium nisi odit officia vero voluptatum facere blanditiis neque, distinctio quod et harum, laboriosam modi doloribus illum, consequuntur sapiente amet veritatis!</p>
  <p><a class="btn btn-primary btn-lg">ver mas..</a></p>
</div>
<script type="text/javascript">
        setTimeout(function(){
        	$(".alert").fadeOut(1500);

        },1500);
 </script>
@stop

