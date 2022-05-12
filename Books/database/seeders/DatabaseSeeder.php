<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Identity;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Identity::factory(10)->create();
        Post::factory(100)->create();
        $this->call([
         UserSeeder::class,
        ]);
    }
}
