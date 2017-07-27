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
        $anggota =[
       ['nama'=>'mimi','anggota'=>'1','posisi'=>'2'],
       ['nama'=>'lila','anggota'=>'2','posisi'=>'3'],
       ['nama'=>'mae','anggota'=>'4','posisi'=>'4'],
       ['nama'=>'kiki','anggota'=>'5','posisi'=>'5']
       ];
 
       DB::table('anggota')->insert($anggota);

     
     

    }
}
