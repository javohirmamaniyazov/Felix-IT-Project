<?php

namespace App\Http\Controllers;

use App\Http\Requests\MaterialRequest;
use App\Http\Resources\MaterialResource;
use App\Models\Material;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function store(MaterialRequest $request) {
        $material = Material::create($request->validated());

        return new MaterialResource($material);
    }
}
