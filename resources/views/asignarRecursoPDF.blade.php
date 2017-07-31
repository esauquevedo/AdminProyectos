<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Proyectos</title>
</head>
 @include('flash::message')
<body>
    <h1>Listado de Asignar Recurso</h1>
    <hr>
      @foreach($asignarRecurso as $pr)
      <h2>proyecto:{{$pr->descripcion}}</h2>
      <h2>proyecto:{{$pr->nombre}}</h2>
      @endforeach
	
</body>