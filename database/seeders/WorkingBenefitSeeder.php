<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkingBenefitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('working_benefit')->insert(
            [
                "title" => "Be The Change",
                "description" => "Develop your own leadership abilities so that you may better your community
                and the world economy.",
                "icon" => "<i class='fa fa-2x fa-fire text-white'></i>",
                "background-color" => "btn-icon rounded-pill bg-danger mr-4",
            ]
        );
    }
}
