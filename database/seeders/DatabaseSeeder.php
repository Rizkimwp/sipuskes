<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Rizky Maulana',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        User::factory(3)->create();
        
        Category::create([
            'name' => 'Home',
            'slug' => 'home'
        ]);
        Category::create([
            'name' => 'Profile',
            'slug' => 'profile'
        ]);
        Category::create([
            'name' => 'Layanan',
            'slug' => 'layanan'
        ]);
        Category::create([
            'name' => 'Kontak',
            'slug' => 'kontak'
        ]);
        Category::create([
            'name' => 'Galery',
            'slug' => 'Galery'
        ]);

        // Database Page

        Page::create([
            'title' => 'Home',
            'konten' => 'home'
        ]);
        Page::create([
            'title' => 'Profile',
            'konten' => 'profile'
        ]);
        Page::create([
            'title' => 'Layanan',
            'konten' => 'layanan'
        ]);
        Page::create([
            'title' => 'Kontak',
            'konten' => 'kontak'
        ]);
        Page::create([
            'title' => 'Galery',
            'konten' => 'galery'
        ]);

       



    }
}
