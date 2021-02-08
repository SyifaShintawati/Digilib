<?php

use Illuminate\Database\Seeder;

class anggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $anggota = [
       	['no_agt'=>'1', 'nm_agt'=>'syifa', 'alamat'=>'saluyu', 'kota'=>'bandung', 'tlp'=>'087754947'],
       	['no_agt'=>'2', 'nm_agt'=>'alfina', 'alamat'=>'selatan', 'kota'=>'bandung', 'tlp'=>'0359478643'],
       	['no_agt'=>'3', 'nm_agt'=>'annisa', 'alamat'=>'sayati', 'kota'=>'bandung', 'tlp'=>'32756555'],
       	['no_agt'=>'4', 'nm_agt'=>'lisda', 'alamat'=>'margahayu', 'kota'=>'surabaya', 'tlp'=>'009764548'],
       	['no_agt'=>'5', 'nm_agt'=>'hanan', 'alamat'=>'nigra', 'kota'=>'madura', 'tlp'=>'07375475'],
       	['no_agt'=>'6', 'nm_agt'=>'zhahra', 'alamat'=>'menak', 'kota'=>'manado', 'tlp'=>'0949693868'],
       	['no_agt'=>'7', 'nm_agt'=>'dina', 'alamat'=>'sekeawi', 'kota'=>'banten', 'tlp'=>'09975846'],
       	['no_agt'=>'8', 'nm_agt'=>'sekar', 'alamat'=>'soreang', 'kota'=>'bandung', 'tlp'=>'087754947'],
       	['no_agt'=>'9', 'nm_agt'=>'risma', 'alamat'=>'sukasih', 'kota'=>'papua', 'tlp'=>'035897435'],
       	['no_agt'=>'10', 'nm_agt'=>'spesial', 'alamat'=>'istimewa', 'kota'=>'yogykarta', 'tlp'=>'0785774647']
       ];
       DB::table('anggotas')->insert($anggota);
    }
}
