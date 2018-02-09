<?php

use Illuminate\Database\Seeder;

class InitializeAppSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'superadmin@app.com',
            'password' => bcrypt('password'),
        ]);
    }
}
