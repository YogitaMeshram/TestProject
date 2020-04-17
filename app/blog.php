<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'title', 'image', 'description', ];

    protected $hidden = [
        '_token',
    ];
}
