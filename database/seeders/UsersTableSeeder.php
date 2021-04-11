<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'sagor',
                'email' => 'developer@sagor.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$iug1oRwKIblabroul1nNIemTpDt02Xs9WfgqX1r7H.hKHyC3ei4xa',
                'remember_token' => 'qqrKiyMalRnu44CTRtxE5K38KXKGBIypmfoQcQZANswem1YTiBVMQbRooZmy',
                'created_at' => '2021-04-11 20:13:02',
                'updated_at' => '2021-04-11 20:13:02',
            ),
        ));
        
        
    }
}