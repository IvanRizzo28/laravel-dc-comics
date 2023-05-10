@extends('layout.app')

@section('title')
    Form
@endsection

@section('main')
    <div class="container">
        <form action="{{ route("comics.store") }}" method="POST">
            @csrf
            <input type="hidden" name="thumb" value="https://placehold.co/600x400">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" min="0.01" max="10000.00">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection
