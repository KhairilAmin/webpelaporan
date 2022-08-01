<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = "laporankerusakan";

    protected $fillable = ["judul","fasilitas_id","tingkatkerusakan", "gambar", "deskripsi"];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function facilities()
    {
        return $this->belongsTo('App\Facility');
    }

    public $timestamps = false;
}
