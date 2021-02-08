<?php

use Illuminate\Database\Seeder;

class jenisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenis = [
			       	['jenis'=>'Novel'],
                    ['jenis'=>'Cergam'],
                    ['jenis'=>'Komik'],
                    ['jenis'=>'Ensiklopedia'],
                    ['jenis'=>'Nomik'],
                    ['jenis'=>'Antalogi'],
                    ['jenis'=>'Dongeng'],
                    ['jenis'=>'Biografi'],
                    ['jenis'=>'Diary'],
                    ['jenis'=>'Novelet'],
                    ['jenis'=>'Fotografi'],
                    ['jenis'=>'Karya Ilmiah'],
                    ['jenis'=>'Kamus'],
                    ['jenis'=>'Tafsir'],
                    ['jenis'=>'Paduan'],
                    ['jenis'=>'Atlas'],
                    ['jenis'=>'Mewarnai']
    ];
       DB::table('jenis')->insert($jenis);
    }
}
