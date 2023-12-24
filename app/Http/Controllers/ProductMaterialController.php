<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductMaterialRequest;
use App\Http\Resources\ProductMaterialResource;
use App\Models\Product_Material;
use Illuminate\Http\Request;

class ProductMaterialController extends Controller
{
    public function store(ProductMaterialRequest $request)
    {
        $productMaterial = Product_Material::create($request->validated());

        return new ProductMaterialResource($productMaterial);
    }
}
