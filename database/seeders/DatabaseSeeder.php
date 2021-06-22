<?php

namespace Database\Seeders;
use App\Models\{User, Post};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Cristopher Valentin A',
            'email' => 'crisdev@admin.com',
            'password' => bcrypt('secret')
        ]);

        Post::factory()->count(24)->create();
    }
}
