@extends("plantilla")

@section ("contenido")
        @forelse($cortos as $corto)
            <div class="m-10 p-10">
                <h1 class="text-2xl">{{$corto["titulo"]}}</h1>
                <p>{{$corto["director"] }}</p>
                <p class="mb-2">{{$corto["sinapsis"] }}</p>
                <a  class="p-2 bg-sky-500 text-white"   href="{{ route('cortos.show', ['corto' => $corto['id']]) }}">Ver Detalles</a>            
            </div>
        @empty 
            <p>No se han econtrado cortos</p>
        @endforelse
@endsection