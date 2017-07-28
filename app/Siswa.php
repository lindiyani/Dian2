<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    //
    protected $table = 'siswa';
    protected $filable = ['nama','umur','kelas'];
    protected $visible = ['nama','umur','kelas'];
    public $timestamps = true;
}
