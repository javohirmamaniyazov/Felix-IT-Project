<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());

        return new ProductResource($product);
    }

    public function getProductInfo($id){
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        $productInfo = [
            'product_name' => $product->product_name,
            'product_code' => $product->product_code,
            'product_materials' => [],
        ];

        $materials = $product->materials;

        foreach ($materials as $material) {
            $warehouse = $material->warehouses()->first();
            $materialInfo = [
                'warhouse_id' => $warehouse->id,
                'material_name' => $material->name,
                'qty' => null, 
                'remainder' => null, 
            ];

            

            if ($warehouse) {
                $materialInfo['qty'] = $warehouse->quantity;
                $materialInfo['remainder'] = $warehouse->remainder;
            }

            $productInfo['product_materials'][] = $materialInfo;
        }

        return response()->json(['result' => $productInfo]);
    }
}
