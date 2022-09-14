<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('header')->insert([
            "title" => "Work <span class='text-warning text-decoration-underline'>efficiently</span> and <span class='text-warning text-decoration-underline'>creatively",
            "description" => "Ramlaxman Group provides flexible job options as well as the chance to strengthen your community while advancing the world economy.",
            "url" => "https://www.youtube.com/embed/fXdlrWuQVW8",
        ]);
    }
}
