<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_galeri extends Model
{
    //
    protected $fillable =['id', 'nama', 'users_id'];
    protected $table = 'kategori_galeri';
    protected $dates = ['created_at', 'updated_at'];
}
