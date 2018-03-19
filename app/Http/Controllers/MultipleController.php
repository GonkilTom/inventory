<?php

namespace App\Http\Controllers;

use\App\Item;
use\App\Category;
use Illuminate\Http\Request;

class MultipleController extends Controller
{
    public function index()
    {
      $items = Item::paginate(10);
      $categories = Category::all();
      return view('stock_management.index', compact('items','categories'));
    }

    public function stockmgt_edit($id)
    {
      $items = Item::all();
      $categories = Category::all();
      $item = Item::findOrFail($id);
      return view('stock_management.stockmgt_edit', compact('item','items','category','categories'));
    }

    public function stockmgt_update(Request $request, $id)
    {
        $this->validate($request,[
          'quantity' => 'required',
          'unit_price' => 'required'
        ]);

        $item = Item::findOrFail($id);
        // $item->item_name = $request->item_name;
        $old_quantity = $item->quantity;
        $new_quantity = $request->quantity;
        $quantity = $old_quantity + $new_quantity;

        $item->quantity = $quantity;
        $item->unit_price = $request->unit_price;
        // $item->category_id = $request->category['category_name'];

        $item->save();

        return redirect('/stockmgt')->with('success' , 'Item Updated');
    }

    public function full_stock_display()
    {
        $items = Item::paginate(10);
        $categories = Category::all();

        return view('display_stock.index', compact('items','categories'));
    }

}
