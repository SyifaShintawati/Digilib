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
    	 $this->call(anggotaTableSeeder::class);
         $this->call(jenisTableSeeder::class);
         $this->call(bukuTableSeeder::class);
         $this->call(peminjamanTableSeeder::class);
         
    }
}
