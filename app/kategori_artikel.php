<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_artikel extends Model
{
    protected $fillable = ['id', 'nama', 'users_id'];
    protected $table = 'kategori_artikel'; 
    protected $dates = ['created_at', 'updated_at'];
}
