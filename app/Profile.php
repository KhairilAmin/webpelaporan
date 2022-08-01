<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    protected $fillable = ['umur', 'alamat', 'user_id'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
