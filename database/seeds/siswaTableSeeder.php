<?php

use Illuminate\Database\Seeder;

class siswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $siswa=[
       ['nama'=>'mimi','kelas'=>'10','alamat'=>'cilebak'],
       ['nama'=>'nini','kelas'=>'11','alamat'=>'ranca'],
       ['nama'=>'lili','kelas'=>'12','alamat'=>'citamiang'],
       ['nama'=>'kiki','kelas'=>'11','alamat'=>'bale']
       ];
 
       DB::table('siswa')->insert($siswa);

     
     



    }
}
