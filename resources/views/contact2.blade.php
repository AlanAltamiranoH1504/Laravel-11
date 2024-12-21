<h1>Pagina Contact 2</h1>

<div style="border: solid 1px orangered">
    <h2>Estos son los parametros que se enviaron desde la ruta</h2>
    <div style="border: solid 1px purple">
        {{--Directiva de IF--}}
        @if($nombre == null && $ciudad == null)
            <strong>Los parametros enviados se encuentran vacios</strong>
            <p>Nombre: {{$nombre}}</p>
            <p>Ciudad: {{$ciudad}}</p>
        @elseif($nombre == null && $ciudad != null)
            <strong>El parametro nombre esta vacio pero ciudad no</strong>
            <p>Nombre: {{$nombre}}</p>
            <p>Ciudad: {{$ciudad}}</p>
        @elseif($nombre != null && $ciudad == null)
            <strong>El parametro nombre tiene contenido pero ciudad esta vacio</strong>
            <p>Nombre: {{$nombre}}</p>
            <p>Ciudad: {{$ciudad}}</p>
        @else
            <strong>Ambos parametros tienen contenido</strong>
            <p>Nombre: {{$nombre}}</p>
            <p>Ciudad: {{$ciudad}}</p>
        @endif

        {{--Directivas de bucle--}}
        @if($paises != null)
            <strong>Hay paises</strong>
            @foreach($paises as $pais)
                <li>Pais: {{$pais}}</li>
            @endforeach
        @else
            <strong>No hay paises</strong>
        @endif
    </div>
</div>
