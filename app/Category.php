<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //only the name attribute is going to be filled
    protected $fillable = ['category_name'];

    //DEFINING RELATIONSHIPS
    // each category contains multiple CreateItemsTabl

    public function items()
    {
        return $this->hasMany('App\Item');
    }
}
