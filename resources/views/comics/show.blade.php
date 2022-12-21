@extends('layouts.app')
@section('title', $comic->title)
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-7 text-center">
                <div class="mt-4">
                    @if (!empty($comic->thumb))
                        <img class="w-75" src="{{ $comic->thumb }}" alt="">
                    @else
                        <p>Nessuna immagine presente</p>
                    @endif
                </div>
                <dl>
                    <dt>Titolo</dt>
                    <dd>{{ $comic->title }}</dd>
                    <dt>Tipo</dt>
                    <dd>{{ $comic->type }}</dd>
                    <dt>Series</dt>
                    <dd>{{ $comic->series }}</dd>
                    <dt>data d'uscita:</dt>
                    <dd>{{ $comic->date }}</dd>
                    <dt>Prezzo:</dt>
                    <dd>{{ $comic->price }}</dd>
                </dl>

                <p>{{ $comic->description }}</p>
            </div>
            </section>
        </div>
    </div>
    </div>

@endsection
