<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->insert([
            "title" => "Great Customer Services is the Base of our Business",
            "description" => "Since 18 years ago, Ramlaxman Innovations has offered automation services. With a variety of products, we serve both domestic and foreign consumers. Currently, Nepal is dealing with a number of security-related difficulties, such as theft, robbery, and plunder. We are now creating and providing Wireless Community Alarm System, Automatic Sliding Sensor Gate, Bank Security System, Access Control System, and Door Lock thanks to the creative ideas of twin young researchers Ram and Laxman. We also provide a mobile attendance system, automatic motor operator, electronic notice board, Nepali voting machine, public transportation tracking system, and other items. Additionally, we provide lifetime warranties and guarantees* as well as replacement warranties and guarantees* for all of our items. About 2 million people are our consumers. Some of our key customers are Nabil Bank, Nepal Police, United Academy, Employees Provident Fund, Himalaya TV, Citizens Bank, Naya patrika, and Mero Job.",
            "satisfied_clients" => 25,
            "successful_projects" => 100,
            "years_of_experience" => 20,
            "present_experts" => 10,
            "image" => "http://127.0.0.1:8000/frontend/img/about.jpg",
        ]);
    }
}
