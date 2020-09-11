@extends('layouts.plantilla')

@section('contenido')

<h1>Create a product</h1>

<form method="POST" action="{{ route('products.store') }}">
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
        <select name="" id="">

            <option value="" selected>select......</option>
            <option value="available">Available</option>
            <option value="unaavailable">UnaAvailable</option>

        </select>
    </div>
</form>

@endsection
