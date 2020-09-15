@extends('layouts.plantilla')

@section('contenido')

<h1>venta de lanza chastifol</h1>

<form method="POST" action="{{ route('products.store') }}">
    @csrf
    <div class="form-row">
        <label>Title</label>
        <input class="form-control" type="text" name="title" value= "{{ old('title') }}">
    </div>
    <div class="form-row">
        <label>Description</label>
        <input class="form-control" type="text" name="description" value= "{{ old('description') }}">
    </div>
    <div class="form-row">
        <label>Price</label>
        <input class="form-control" type="number" min="1.00" step="0.01" name="price" value= "{{ old('price') }}">
    </div>
    <div class="form-row">
        <label>Stock</label>
        <input class="form-control" type="number" min="0" name="stock" value= "{{ old('stock') }}">
    </div>
    <div class="form-row">
        <label>Status</label>
        <select class="custom-select" name="status" >

            <option value="" selected>select......</option>
            <option {{ old('status') == 'available' ? 'selected' : '' }}value="available">Available</option>
            <option {{ old('status') == 'unavailable' ? 'selected' : '' }}value="unavailable">UnaAvailable</option>

        </select>
    </div>
    {{-- se puede observar como son los comando para crear un boton de creacion --}}
    <div class="form-row">
<button type="subimit" class="btn btn-primary btn-lg">create product</button>

    </div>
</form>

@endsection
