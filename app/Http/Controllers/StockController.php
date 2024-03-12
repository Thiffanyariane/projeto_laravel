<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\StockItem;

class StockController extends Controller
{

    public function index()
    {
        $stockItems = StockItem::all();
        return view('stock.index', compact('stockItems'));
    }


    public function create()
    {
        return view('stock.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|integer',
            'value' => 'required|numeric',
        ]);

        StockItem::create($validatedData);

        return redirect()->route('stock.index')->with('success', 'Item de estoque criado!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(StockItem $stockItem)
    {
        return view('stock.edit', compact('stockItem'));
    }


    public function update(Request $request, StockItem $stockItem)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'quantity' => 'required|integer',
            'value' => 'required|numeric',
        ]);

        $stockItem->update($validatedData);

        return redirect()->route('stock.index')->with('success', 'Item de estoque atualizado!');
    }

    public function destroy(StockItem $stockItem)
    {
        $stockItem->delete();

        return redirect()->route('stock.index')->with('success', 'Item de estoque excluído!');
    }

}
