<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengumuman extends Model
{
    //
    protected $fillable= ['judul', 'isi', 'users_id', 'kategori_artikel_id'];
    protected $table= 'pengumuman';
    protected $dates = ['created_at', 'updated_at'];
}
