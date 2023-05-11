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
                            <div class="d-flex">
                                <a href="{{ route('comics.show',$item->id) }}" class="btn btn-primary me-1">Dettagli</a>
                                <a href="{{ route('comics.edit',$item->id) }}" class="btn btn-primary me-1">Modifica</a>
                                <form action="{{ route('comics.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Elimina"></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
