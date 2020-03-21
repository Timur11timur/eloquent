<?php

use App\Post;
use App\User;
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
        factory(User::class)->create();
        $this->call(ExperiencesTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
        factory(Post::class)->create(['user_id' => 1]);
    }
}
