<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = array('item_name','category_id','quantity','unit_price');


    //DEFINING RELATIONSHIPS
    public function category()
    {
      return $this->belongsTo('App\Category');
    }
}
