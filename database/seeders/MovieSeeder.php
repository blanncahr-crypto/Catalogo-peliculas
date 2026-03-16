<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('movies')->insert([
            ['title' => 'Inception', 'synopsis' => 'A mind-bending thriller about dreams.', 'year' => 2010, 'cover' => 'inception.jpg'],
            ['title' => 'The Matrix', 'synopsis' => 'A hacker discovers the reality is a simulation.', 'year' => 1999, 'cover' => 'matrix.jpg'],
            ['title' => 'Interstellar', 'synopsis' => 'A space adventure to save humanity.', 'year' => 2014, 'cover' => 'interstellar.jpg'],
            ['title' => 'The Dark Knight', 'synopsis' => 'Batman faces the Joker in Gotham.', 'year' => 2008, 'cover' => 'dark_knight.jpg'],
            ['title' => 'Forrest Gump', 'synopsis' => 'The life story of a simple man.', 'year' => 1994, 'cover' => 'forrest_gump.jpg'],
            ['title' => 'Gladiator', 'synopsis' => 'A betrayed general seeks revenge.', 'year' => 2000, 'cover' => 'gladiator.jpg'],
            ['title' => 'Titanic', 'synopsis' => 'A tragic love story on the Titanic.', 'year' => 1997, 'cover' => 'titanic.jpg'],
            ['title' => 'Avengers: Endgame', 'synopsis' => 'Superheroes unite to save the universe.', 'year' => 2019, 'cover' => 'endgame.jpg'],
            ['title' => 'The Lord of the Rings', 'synopsis' => 'A quest to destroy the One Ring.', 'year' => 2001, 'cover' => 'lotr.jpg'],
            ['title' => 'Pulp Fiction', 'synopsis' => 'A non-linear crime story.', 'year' => 1994, 'cover' => 'pulp_fiction.jpg'],
        ]);
    }
}
