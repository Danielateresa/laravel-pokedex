<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemon = config('pokemon.pokemon');
        foreach ($pokemon as $single_pokemon) {
            $new_pokemon = new Pokemon();
            $new_pokemon->name = $single_pokemon['name'];
            $new_pokemon->description = $single_pokemon['description'];
            $new_pokemon->thumb = $single_pokemon['thumb'];
            $new_pokemon->type = $single_pokemon['type'];
            $new_pokemon->start_level = $single_pokemon['start_level'];
            $new_pokemon->save();
        }
    }
}