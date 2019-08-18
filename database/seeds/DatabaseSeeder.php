<?php

use Illuminate\Database\Seeder;
use App\Food;
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
        Food::truncate();
        factory(Food::class,5)->create();
    }
}
