<?php

namespace App\Http\Controllers;

use App\Models\ItemType;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ItemTypeController extends Controller
{
    public function index () {
        return view("item-types.index", [
            "item_types" => ItemType::paginate(10)
        ]);
    }

    public function create () {
        return view("item-types.create");
    }

    public function store(Request $request) {
        $request->validate([
            "name" => [Rule::unique("item_types")->withoutTrashed()]
        ]);

        ItemType::create([
            "name" => $request->name
        ]);

        return redirect("/item-type");
    }

    public function edit (ItemType $item_type) {
        return view("item-types.edit", [
            "item_type" => ItemType::find($item_type->id)
        ]);
    }

    public function update(Request $request, Itemtype $item_type) {
        if ($request->name != $item_type->name) {
            $request->validate([
                "name" => [Rule::unique("item_types")->withoutTrashed()]
            ]);
        }

        $item_type->update([
            "name" => $request->name
        ]);

        return redirect ("/item-type");
    }

    public function destroy (Itemtype $item_type) {
        $item_type->delete();
        return redirect("/item-type");
    }
}
