@extends('layout.app')

@section('title')
    {{ $item->title }}
@endsection

@section('main')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <div class="card">
                    <img src="{{ $item->thumb }}" class="card-img-top w-100" alt="{{ $item->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <h6>Price: ${{ $item->price }}</h6>
                        <p class="card-text">{{ $item->description }}</p>
                        <p class="card-text">Series: {{ $item->series }} - Type: {{ $item->type }}</p>
                        <p class="card-text">{{ $item->sale_date }}</p>
                        <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna indietro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
