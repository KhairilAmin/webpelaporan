<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    protected $table = "fasilitas";

    protected $fillable = ["id","nama", "alamat"];
    public function report()
    {
        return $this->hasMany('App\Report');
    }
}
