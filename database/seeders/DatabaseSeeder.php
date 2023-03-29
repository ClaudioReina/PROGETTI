<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'admin',
            'is_admin' => 1,
            'is_revisor' => 1,  
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);

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
