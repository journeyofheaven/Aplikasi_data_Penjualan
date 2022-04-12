<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ["namaKategori"];

    public function barang()
    {
        return $this->hasMany('App\Barang');
    }
}
