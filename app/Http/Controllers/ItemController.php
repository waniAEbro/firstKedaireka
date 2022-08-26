<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\ItemType;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index () {
        return view("items.index", [
            "items" => Item::paginate(10)
        ]);
    }

    public function create () {
        return view("items.create", [
            "item_types" => ItemType::get()
        ]);
    }

    public function store (Request $request) {
        Item::create([
            "name" => $request->name,
            "quantity" => $request->quantity,
            "item_type_id" => $request->item_type,
            "price" => $request->price
        ]);
        return redirect("/item");
    }

    public function edit (Item $item) {
        return view("items.edit", [
            "item" => $item,
            "item_types" => ItemType::get()
        ]);
    }

    public function update(Request $request, Item $item) {
        $item->update([
            "name" => $request->name,
            "quantity" => $request->quantity,
            "item_type_id" => $request->item_type,
            "price" => $request->price
        ]);
        return redirect("/item");
    }

    public function destroy (Item $item) {
        $item->delete();
        return redirect("/item");
    }
}
