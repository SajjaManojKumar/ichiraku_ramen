<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    // Function Index.
    // Used to read all records and pass to index view.
    public function index()
    {
        # code...
        $items = Item::all();
        return view('item/index', ['items' => $items]);
    }

    // Function Create
    // Used to add new item to DB
    public function create()
    {
        # code...
        return view('item/create');
    }

    // Function Store
    // Used as post request to write the data into DB.
    public function store()
    {
        # code...
        $item = new Item();

        $item->item_name = request('itemname');
        $item->price = request('itemprice');
        $item->itemCategory = request('type');
        $item->save();
        return redirect()->route('item.index');
    }

    public function destroy($itemId)
    {
        # code...
        $item = Item::findOrFail($itemId);
        $item->delete();
        return redirect()->route('item.index');
    }
}
