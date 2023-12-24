<?php

namespace App\Http\Controllers;

use App\Http\Requests\WarehouseRequest;
use App\Http\Resources\WarehouseResource;
use App\Models\Warehouse;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    public function store(WarehouseRequest $request)
    {
        $validatedData = $request->validated();

        $warehouse = Warehouse::create($validatedData);

        return response()->json(['message' => 'Warehouse added successfully', 'data' => new WarehouseResource($warehouse)]);
    }
}
