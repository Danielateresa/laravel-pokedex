<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokemon;
use App\Http\Requests\UpdatePokemonRequest;
use App\Http\Requests\StorePokemonRequest;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pokemon = Pokemon::all();
        return view('pokemon.index', compact('pokemon'));
    }
    public function story()
    {
        return view('pokemon.story');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Requests\StorePokemonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePokemonRequest $request, Pokemon $pokemon)
    {
        $data = [
            'name'=>$request['name'],
            'description'=>$request['description'],
            'thumb'=>$request['thumb'],
            'type'=>$request['type'],
            'start_level'=>$request['start_level'],
        ];
        Pokemon::create($data);
        return to_route('index')->with('message', "New Pokemon added on database");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pokemon $pokemon)
    {
        return view('pokemon.show', compact('pokemon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pokemon $pokemon)
    {
        return view('pokemon.edit', compact('pokemon'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Requests\UpdatePokemonRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePokemonRequest $request, Pokemon $pokemon)
    {
        $data = [
            'name'=>$request['name'],
            'description'=>$request['description'],
            'thumb'=>$request['thumb'],
            'type'=>$request['type'],
            'start_level'=>$request['start_level'],
        ];
        $pokemon->update($data);
        return to_route('index')->with('message', "$pokemon->name modified");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();
        return to_route('index')->with('message', "$pokemon->name deleted from database");
    }
}