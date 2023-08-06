<?php

namespace Database\Seeders;

use DB;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user = User::create([
            'name' => 'harrison',
            'email' => 'harrison@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        $user = User::find($user->id);
        DB::table('posts')->insert([
            'title' => 'my story',
            'body' => "Harrison's coding journey is a testament to the power of determination, curiosity, and a love for learning.",
            'user_id' => $user->id,
        ]);
    }
}
