<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function Index()
    {
        $items = Item::all();
        $categories = Category::all();
        return view('sales.index', compact('items', 'categories'));
    }
}
