@extends('layouts.plantilla')


<header>
@section('cabeza')
<h1>Lanza chastifol </h1>
@endsection
</header>


<body>
@section('contenido')

<h1>lista de tabla</h1>
@if (empty($productos))
<div>
    {{-- @empy valida si una variables tiene datos o no --}}
</div>

@else
<div class="table-responsive">
    <table class="table table-striped">
        <thead class="thead-light">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>price</th>
                <th>stock</th>
                <th>status</th>

            </tr>
        </thead>
        <tboby>
            {{-- @foreach funciona como sacar de lo gloval a lo particular --}}
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->title }}</td>
                <td>{{ $producto->description }}</td>
                <td>{{ $producto->price }}</td>
                <td>{{ $producto->stock }}</td>
                <td>{{ $producto->status }}</td>
            </tr>
            @endforeach
        </tboby>
    </table>
    {{ $productos->links() }}
</div>
@endif

@endsection
</body>

<footer>
@section('pie de pagina')
<h1>pie de pagina</h1>

@endsection
</footer>








