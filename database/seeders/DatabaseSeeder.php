<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $categories = [
            ["Elettrodomestici",],
            ["Smartphone"],
            ["Veicoli"],
            ["Per la casa"],
            ["Libri"],
            ["Fotografia"],
            ["Console e videogiochi"],
            ["Per lo sport"],
            ["Strumenti"],
            ["Per gli animali"]
        ];

        foreach($categories as $category){
            DB::table('categories')->insert([
                'name' => $category[0],
            ]);
        }
    }
}
