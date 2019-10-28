<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $fillable = [
        'rating_description',
       
    ];
    public function skillEntry()
    {
        return $this->hasMany('App\Model\Rating');
    }
}
