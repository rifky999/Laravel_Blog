<?php

use Illuminate\Database\Seeder;

class artikel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

 DB::table('article')->insert([
   'judul' => 'belajar laravel',
   'isi' => 'belajar laravel mudah ',
   'kategori' => 'laravel',
   'foto' => 'laravel.png',
   'author_id' => '1',
   'Tanggal' => '2017-02-08 09:53:56.2230000'
 ]);
 }
}
