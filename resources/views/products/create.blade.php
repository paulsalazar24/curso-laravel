@extends('layouts.plantilla')

@section('contenido')

<h1>venta de lanza chastifol</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-row">
        <label>Title</label>
        <input class="form-control" type="text" name="title" required>
    </div>
    <div class="form-row">
        <label>Description</label>
        <input class="form-control" type="text" name="description" required>
    </div>
    <div class="form-row">
        <label>Price</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" required>
    </div>
    <div class="form-row">
        <label>Stock</label>
        <input class="form-control" type="number" min="0" name="stock" required>
    </div>
    <div class="form-row">
        <label>Status</label>
        <select class="custom-select" name="status" required>

            <option value="" selected>select......</option>
            <option value="available">Available</option>
            <option value="unaavailable">UnaAvailable</option>

        </select>
    </div>
    {{-- se puede observar como son los comando para crear un boton de creacion --}}
    <div class="form-row">
<button type="subimit" class="btn btn-primary btn-lg">create product</button>

    </div>
</form>

@endsection
