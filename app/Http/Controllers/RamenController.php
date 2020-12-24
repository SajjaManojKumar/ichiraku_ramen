<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ramen;
use App\Models\Item;

class RamenController extends Controller
{
    public function welcome()
    {
        # code...
        $soups = Item::where('itemCategory', 'Soup')->get();
        $noodles = Item::where('itemCategory', 'Noodles')->get();
        $toppings = Item::where('itemCategory', 'Toppings')->get();
        return view('welcome', ['soups' => $soups, 'noodles' => $noodles, 'toppings' => $toppings]);
    }

    // Function Index.
    // Used to read all records and pass to index view.
    public function index()
    {
        # code...
        $ramens = Ramen::where('completed', FALSE)->get();
        return view('ramen/index', ['ramens' => $ramens]);
    }

    // Function Index.
    // Used to read all records and pass to index view.
    public function history()
    {
        # code...
        $ramens = Ramen::all();
        return view('ramen/history', ['ramens' => $ramens]);
    }

    // Function Create.
    // Used to create a record and save in DB.
    public function create()
    {
        # code...
        $soups = Item::where('itemCategory', 'Soup')->get();
        $noodles = Item::where('itemCategory', 'Noodles')->get();
        $toppings = Item::where('itemCategory', 'Toppings')->get();
        return view('ramen/create', ['soups' => $soups, 'noodles' => $noodles, 'toppings' => $toppings]);
    }

    // Function Store
    // Used as post request to write the data into DB.
    public function store(Request $request)
    {
        # code...
        $ramen = new Ramen();

        $request->validate([
            'name' => 'required',
            'phoneNumber' => 'required|digits:10',
            'soup' => 'required',
            'noodle' => 'required',
            'topping' => 'required'
        ]);


        $ramen->name = request('name');
        $ramen->phoneNumber = request('phoneNumber');
        $ramen->S_item_id = request('soup');
        $ramen->N_item_id = request('noodle');
        $ramen->T_item_id = request('topping');
        $ramen->completed = FALSE;
        $soup = Item::findOrFail(request('soup'));
        $noodle = Item::findOrFail(request('noodle'));
        $topping = Item::findOrFail(request('topping'));
        $ramen->totalCost = $soup->price + $noodle->price + $topping->price;
        $ramen->save();
        
        $ID = $ramen->order_id;
        return redirect()->route('ramen.details')->with('orderId',$ID);
    }

    public function update($orderId)
    {
        # code...
        $item = Ramen::findOrFail($orderId);
        $item->completed = TRUE;
        $item->save();
        return redirect()->route('ramen.index');
    }

    // Function Show.
    // Used to read only one records and pass to show view.
    public function show($orderId)
    {
        # code...
        $order = Ramen::findOrFail($orderId);
        $soup = Item::findOrFail($order->S_item_id);
        $noodle = Item::findOrFail($order->N_item_id);
        $topping = Item::findOrFail($order->T_item_id);
        return view('ramen/show', ['order' => $order, 'soup' => $soup, 'noodle' => $noodle, 'topping' => $topping]);
    }

    // Function Bill.
    // Used to read only one records and pass the bill of that record to bill view.
    public function bill($orderId)
    {
        # code...
        $order = Ramen::findOrFail($orderId);
        $soup = Item::findOrFail($order->S_item_id);
        $noodle = Item::findOrFail($order->N_item_id);
        $topping = Item::findOrFail($order->T_item_id);
        return view('ramen/bill', ['order' => $order, 'soup' => $soup, 'noodle' => $noodle, 'topping' => $topping]);
    }

    public function details(Request $request)
    {
        # code...
        $orderId = $request->session()->get('orderId', '0');
        $request->session()->put('orderId', $orderId);
        $order = Ramen::findOrFail($orderId);
        $soup = Item::findOrFail($order->S_item_id);
        $noodle = Item::findOrFail($order->N_item_id);
        $topping = Item::findOrFail($order->T_item_id);
        return view('ramen/details', ['order' => $order, 'soup' => $soup, 'noodle' => $noodle, 'topping' => $topping]);
    }

}

