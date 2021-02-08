<?php

use Illuminate\Database\Seeder;

class peminjamanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \App\peminjaman::truncate();

         $pinjam = [
			       	['no_pinjam'=>'1', 'id_agt'=>'1', 'id_buku'=>'1', 'tgl_pinjam'=>'2018-11-23', 'tgl_hsblk'=>'2018-11-24', 'tgl_kbl'=>'2018-11-25', 'denda'=>'5000'],
			       	['no_pinjam'=>'2', 'id_agt'=>'2', 'id_buku'=>'2', 'tgl_pinjam'=>'2018-11-12', 'tgl_hsblk'=>'2018-11-14', 'tgl_kbl'=>'2018-11-18', 'denda'=>'15000'],
    ];
       // DB::table('peminjaman')->insert($pinjam);
       DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       Eloquent::reguard();
    }
}
