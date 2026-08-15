<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Smadav',
            'email' => 'smadav@gmail.com',
            'password'=>'1234'   
        ]);
    }
}
