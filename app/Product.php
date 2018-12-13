<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];

    //
    protected $fillable = [
    	'username', 'title', 'description',
    ];


    public function reviews()
    {

        return $this->hasMany('App\Review', 'product_id', 'id');

    }



}
