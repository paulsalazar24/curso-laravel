@extends('layouts.plantilla')


<header>
    @section('cabeza')
    <h1>Lanza chastifol </h1>
    @endsection
</header>


<body>
    @section('contenido')

    <h1>lista de tabla</h1>
    <a class="btn btn-success" href="{{ route('products.create') }}">create</a>

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
                    <th>actions</th>

                </tr>
            </thead>
            <tboby>
                {{-- @foreach funciona como sacar de lo gloval a lo particular --}}
                @foreach ($productos as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->status }}</td>
                    <td>
                        <a class="btn btn-link"
                            href="{{ route('products.show', ['product' => $product->id]) }}">show</a>

                        <a class="btn btn-link"
                            href="{{ route('products.edit', ['product' => $product->id]) }}">edite</a>

                        <form method="POST" action="{{ route('products.destroy', ['product' => $product->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link">Delete</button>

                        </form>

                    </td>
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
