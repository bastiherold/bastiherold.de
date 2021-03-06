<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InitializeAppSeeder::class);
        $this->call(MessagesTableSeeder::class);
    }
}
