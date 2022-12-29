@extends('layouts.app')

@section('content')
<div class="banner">

</div>
<div class="container py-5">


    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong>{{session('message')}}</strong>
    </div>
    @endif

    <div class="text-end py-4">
        <a href="{{route('pokemon.create')}}" class="btn btn-primary">Add Pokemon</a>
    </div>
    <div class="table-responsive d-flex justify-content-center">
        <table class="table table_primary">
            <thead>
                <tr class="table-primary">
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">type</th>
                    <th scope="col">description</th>
                    <th scope="col">start_level</th>
                    <th scope="col">image</th>
                    <th scope="col">actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($pokemon as $single_pokemon)
                <tr class="h-100">
                    <td>{{$single_pokemon->id}}</td>
                    <td>{{$single_pokemon->name}}</td>
                    <td>{{$single_pokemon->type}}</td>
                    <td>{{$single_pokemon->description}}</td>
                    <td>{{$single_pokemon->start_level}}</td>
                    <td><img src="{{$single_pokemon->thumb}}" alt="{{$single_pokemon->name}}"></td>
                    <td class="">
                        <a href="{{route('pokemon.show', $single_pokemon->id)}}" class=" btn btn-primary w-100">show</a>
                        <a href="{{route('pokemon.edit', $single_pokemon->id)}}"
                            class="btn btn-warning w-100 my-1">edit</a>

                        <form action="{{route('pokemon.destroy', $single_pokemon->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger w-100">delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

@endsection