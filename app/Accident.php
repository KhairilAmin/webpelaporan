<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accident extends Model
{
    protected $table = "kecelakaan";

    protected $fillable = ["tempat", "waktu", "platnomor", "keadaankorban"];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public $timestamps = false;
}
