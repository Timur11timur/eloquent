<?php

use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'website_url' => 'http//:' . Str::random(10),
            'github_url' => 'http//:' . Str::random(10),
            'twitter_url' => 'http//:' . Str::random(10),
        ]);
    }
}
