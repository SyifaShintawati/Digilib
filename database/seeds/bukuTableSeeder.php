<?php

use Illuminate\Database\Seeder;

class bukuTableSeeder extends Seeder
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
        \App\buku::truncate();
 
        $buku = [
       	['id_jb'=>'1', 'judul'=>'Ranah 3 Warna', 'pengarang'=>'Ahmad Fuadi', 'isbn'=>'978-979-22-4861-6', 'thn'=>'2011', 'penerbit'=>'Gramedia', 'stok'=>'3'],
       	['id_jb'=>'2', 'judul'=>'Jejak Mawar Hilang', 'pengarang'=>'Sri Izzati', 'isbn'=>'943-934-33-4544-2', 'thn'=>'2016', 'penerbit'=>'Gramedia', 'stok'=>'5'],
       	['id_jb'=>'1', 'judul'=>'Bidadari Surga', 'pengarang'=>'Tere Liye', 'isbn'=>'575-847-11-2894-6', 'thn'=>'2012', 'penerbit'=>'Gramedia', 'stok'=>'2'],
       	['id_jb'=>'1', 'judul'=>'Hujan', 'pengarang'=>'Tere Liye', 'isbn'=>'343-454-54-4356-5', 'thn'=>'2014', 'penerbit'=>'Gramedia', 'stok'=>'7'],
       	['id_jb'=>'2', 'judul'=>'Bumi', 'pengarang'=>'Tere Liye', 'isbn'=>'345-654-54-5665-8', 'thn'=>'2016', 'penerbit'=>'Gramedia', 'stok'=>'9']
       ];

       // DB::table('buku')->insert($buku);
       DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       Eloquent::reguard();
    }
}
