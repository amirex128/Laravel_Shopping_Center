<?php

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
        // $this->call(UsersTableSeeder::class);
        factory(App\User::class,10)->create()->each(function($user){
            $user->articles()->save(factory(App\Article::class)->make());
            $user->articles()->save(factory(App\Article::class)->make());
            $user->articles()->save(factory(App\Article::class)->make());
            $user->articles()->save(factory(App\Article::class)->make());
            $user->products()->save(factory(App\Product::class)->make());
            $user->products()->save(factory(App\Product::class)->make());
            $user->products()->save(factory(App\Product::class)->make());
            $user->products()->save(factory(App\Product::class)->make());
        });


    }
}
