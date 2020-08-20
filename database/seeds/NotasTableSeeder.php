<?php

use Illuminate\Database\Seeder;
use App\User;
class NotasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            user::create([
            'name' => 'yadira',
            'email' => 'yadira@yadira.com',
            'password' => bcrypt('123456789')
            ]);

    }
}
