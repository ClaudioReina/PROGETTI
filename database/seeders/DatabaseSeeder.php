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
        
        $users = [
            [
                'name' => 'Utente1',
                'password' => bcrypt('password1'),
                'email' => 'utente1@email.com',
                'is_revisor' => false
            ],
            [
                'name' => 'Utente2',
                'password' => bcrypt('password2'),
                'email' => 'utente2@email.com',
                'is_revisor' => false
            ],
            [
                'name' => 'Utente3',
                'password' => bcrypt('password3'),
                'email' => 'utente3@email.com',
                'is_revisor' => false
            ],
            [
                'name' => 'Utente4',
                'password' => bcrypt('password4'),
                'email' => 'utente4@email.com',
                'is_revisor' => false
            ],
            [
                'name' => 'Utente5',
                'password' => bcrypt('password5'),
                'email' => 'utente5@email.com',
                'is_revisor' => false
            ],
            [
                'name' => 'Revisore1',
                'password' => bcrypt('password6'),
                'email' => 'revisore1@email.com',
                'is_revisor' => true
            ],
            [
                'name' => 'Revisore2',
                'password' => bcrypt('password7'),
                'email' => 'revisore2@email.com',
                'is_revisor' => true
            ],
            [
                'name' => 'Revisore3',
                'password' => bcrypt('password8'),
                'email' => 'revisore3@email.com',
                'is_revisor' => true
            ],
            [
                'name' => 'Revisore4',
                'password' => bcrypt('password9'),
                'email' => 'revisore4@email.com',
                'is_revisor' => true
            ],
            [
                'name' => 'Revisore5',
                'password' => bcrypt('password10'),
                'email' => 'revisore5@email.com',
                'is_revisor' => true
                ]
            ];
            
            DB::table('users')->insert($users);
            
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
    