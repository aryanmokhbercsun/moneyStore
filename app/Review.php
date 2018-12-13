<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $guarded = [];
    /*
    *
    *
    * @var Array
    */
    protected $fillable = [
    	'username', 'product_ID', 'review',
    ];
    


    public function products()
    {

        return $this->belongsTo('App\Product');

    }
}
