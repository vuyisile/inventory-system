<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;

class RemoveProductController extends Controller
{
    public function remove(Request $request, $id)
    {
        $validatedData = $request->validate([
            'confirm' => 'required|boolean|accepted',
        ]);

        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully']);
    }
}
