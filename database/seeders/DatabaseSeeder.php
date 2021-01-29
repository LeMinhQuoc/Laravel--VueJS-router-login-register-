<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert(
            [
                [
                    'username' =>'minhquoc',
                    'password' =>'123',
                    'firstname' =>'Quoc',
                    'lastname' =>'Le',
                    
                    'dateofbith' =>'1999-3-19',          
                ],
                [
                    'username' =>'minhquoc2',
                    'password' =>'123',
                    'firstname' =>'Quoc',
                    'lastname' =>'Le',
                    'dateofbith' =>'1999-3-19',          
                ]
            
            ]
        );
    }
}
