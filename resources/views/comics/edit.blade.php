@extends('layouts.app')
@section('title', 'aggiorna Comic')
@section('content')
    <section>
        <div class="container">
            <h2 class="text-center">Aggiorna il comic {{ $comic->title }}</h2>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-7 my-4">
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $comic->title }}">

                        </div>
                        <div class="mb-3">
                            <label for="thumb" class="form-label">Image</label>
                            <input type="text" class="form-control" id="thumb" name="thumb"
                                value="{{ $comic->thumb }}">
                        </div>
                        <div class="mb-3 ">
                            <label for="thumb" class="form-label">Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{ $comic->price }}">
                        </div>
                        <div class="mb-3 ">
                            <label for="series" class="form-label">Series</label>
                            <input type="text" class="form-control" id="series" name="series"
                                value="{{ $comic->series }}">
                        </div>
                        <div class="mb-3 ">
                            <label for="type" class="form-label">Type</label>
                            <input type="text" class="form-control" id="type" name="type"
                                value="{{ $comic->type }}">
                        </div>
                        <div class="mb-3 ">
                            <label for="date" class="form-label">date</label>
                            <input type="text" class="form-control" id="date" name="date"
                                value="{{ $comic->date }}">
                        </div>
                        <div class="mb-3 ">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control"name="description" id="description" rows="10">{{ $comic->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>




    </section>

@endsection
