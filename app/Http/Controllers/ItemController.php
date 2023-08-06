<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $item = Item::all();
        
        return view('items.index',compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Item;
        $item->name = $request->name;
        $item->brand = $request->brand;
        $item->company = $request->company;
        $item->subcategory = $request->subcategory;
        $item->description = $request->description;
        $item->save();
        return redirect('admin/item');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('items.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('items.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
