<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return view( 'item-overview', [
            'items' => Item::all(),
        ] );
    }

    public function create()
    {
        return view( 'item-detail' );
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $item = new Item();
        $item->name = $request->name;
        $item->description = $request->description;
        $item->user_id = auth()->id();
        $item->save();

        return redirect('/item');
    }

    public function edit($id)
    {
        return view( 'item-detail', [
            'item' => Item::find( $id ),
        ] );
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $item = Item::find($id);
        $item->name = $request->name;
        $item->description = $request->description;
        $item->save();

        return redirect('/item');
    }
}
