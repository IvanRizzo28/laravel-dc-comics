@extends('layout.app')

@section('title')
    Home
@endsection

@section('main')
    <div class="container">
        <div class="py-5">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi comic</a>
        </div>
        <div class="row gy-3">
            @foreach ($data as $item)
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="card h-100">
                        <img src="{{ $item->thumb }}" class="card-img-top w-100" alt="{{ $item->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }} - ${{ $item->price }}</h5>
                            <p class="card-text">{{ $item->description }}</p>
                            <div class="d-flex flex-wrap">
                                <a href="{{ route('comics.show',$item->id) }}" class="btn btn-primary me-1 mb-1">Dettagli</a>
                                <a href="{{ route('comics.edit',$item->id) }}" class="btn btn-primary me-1 mb-1">Modifica</a>
                                <input type="button" class="btn btn-danger bottone-elimina" value="Elimina" id="{{ $item->id }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="popup d-none justify-content-center align-items-center" id="popup{{ $item->id }}">
                    <div class="message">
                        <h5>Vuoi eliminare questo Comic?</h5>
                        <div class="d-flex justify-content-around mt-3">
                            <form action="{{ route('comics.destroy', $item->id) }}" method="POST" id="form">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="SI" class="btn btn-danger">
                            </form>
                            <input type="button" value="NO" class="btn btn-primary chiudi" id="chiudi{{ $item->id }}">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    @vite('resources/js/delete.js')
@endsection
