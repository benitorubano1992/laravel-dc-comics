@extends('layouts.app')
@section('title', 'Inserisci un Nuovo Comic')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <h2 class="text-center my-4">Inserisci un Nuovo Comic</h2>
                <form action="{{ route('comics.store') }}" method="POST" class="my-5">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Comic Title:</label>
                        <input type="text" class="form-control" id="title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Image src:</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" class="form-control" id="price" name="price" min="0"
                            max="10">
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Series:</label>
                        <input type="text" class="form-control" id="series" name="series">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Type:</label>
                        <input type="text" class="form-control" id="type" name="type">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea class="form-control" id="desctiption" name="description" rows="10"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
