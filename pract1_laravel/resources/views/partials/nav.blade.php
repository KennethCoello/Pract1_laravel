
{{-- El setActive va a los helpers que estan en App --}}
{{-- //En el segundo setActive el asterisco es para que funcione en las subpaginas de cortos// --}}
<nav class="p-5 bg-black text-white text-center">
    <ul class="font-bold uppercase ">
        <h1 class="text-5xl pb-5">Festicortos</h1>
        <li class="{{ setActive('inicio') }} ">
            <a href="{{ route('inicio') }}">Inicio</a>
        </li>
        <li class="{{ setActive('cortos.*') }}">
            <a href="{{ route('cortos.index') }}">Lista Cortos</a>
        </li>
    </ul>
</nav>

