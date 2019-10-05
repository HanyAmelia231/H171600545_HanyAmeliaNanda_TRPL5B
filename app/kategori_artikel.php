<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_artikel extends Model
{
    protected $fillable = ['id', 'nama', 'users_id', 'created_at', 'update_at'];
    protected $table = 'kategori_artikel';

    protected $casts=[

    ];
}
