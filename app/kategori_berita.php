<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_berita extends Model
{
    //
    protected $fillable =['id', 'nama', 'users_id'];
    protected $table = 'kategori_berita';
}
