@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h2 class="text-center pb-4 text-secondary">Add New Pokemon</h2>

    <form action="{{route('pokemon.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                placeholder="pokemon name">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" id="type" aria-describedby="helpId"
                placeholder="pokemon type">
        </div>

        <div class="mb-3">
            <label for="desciption" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" aria-describedby="helpId"
                placeholder="pokemon description">
        </div>

        <div class="mb-3">
            <label for="start_level" class="form-label">Start level</label>
            <input type="number" class="form-control" name="start_level" id="start_level" aria-describedby="helpId"
                placeholder="pokemon start level">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image</label>
            <input type="text" class="form-control" name="thumb" id="thumb" aria-describedby="helpId"
                placeholder="pokemon image url">
        </div>

        <button type="submit" class="btn btn-primary">Add Pokemon</button>
    </form>

</div>

@endsection