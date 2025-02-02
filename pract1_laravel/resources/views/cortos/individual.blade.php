@extends ("plantilla")
@section("contenido")
    <div class="m-10 p-10">
        <h1 class="text-2xl">{{$ide["titulo"]}}</h1>
        <p>{{$ide["director"] }}</p>
        <p class="mb-2">{{$ide["sinapsis"] }}</p>
        <a class="p-2 bg-sky-500 text-white" href="{{ route("cortos.index") }}">Volver</a>        
    </div>
@endsection