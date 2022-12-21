@extends('layouts.app')
@section('title', 'comics')
@section('content')

    <section class="my-5">
        <div class="container">
            <div class="text-end mb-4">
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Inserire un Nuovo Comic</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">titolo</th>
                        <th scope="col">tipo</th>
                        <th scope="col">series</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->series }}</td>
                            <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">dettagli</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>


@endsection
