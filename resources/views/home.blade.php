@extends('layout.app')

@section('title')
    Home
@endsection

@section('main')
    <div class="container">
        <div class="row gy-3">
            @foreach ($data as $item)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="{{ $item->thumb }}" class="card-img-top w-100" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }} - ${{ $item->price }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <a href="{{ route('comics.show',$item->id) }}" class="btn btn-primary">Dettagli</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
