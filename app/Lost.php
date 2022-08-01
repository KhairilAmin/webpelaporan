<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lost extends Model
{
    protected $table = "kehilangan";

    protected $fillable = ["judul", "barang", "gambar", "ciri", "keterangan"];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public $timestamps = false;
}
