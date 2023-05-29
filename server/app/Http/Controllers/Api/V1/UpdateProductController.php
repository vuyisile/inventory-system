<?php 
namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Product;

class UpdateProductController extends Controller
{
    public function update(Request $request, $id)
    {
        echo "ID $id";
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'code' => 'required|max:50|unique:products,code,'.$id,
            'description' => 'nullable|max:1000',
            'quantity' => 'required|integer|min:0',
            'reorder_level' => 'nullable|integer|min:0',
            'cost' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'supplier_info' => 'nullable|max:255',
            'location' => 'nullable|max:255',
            'date_received' => 'nullable|date',
            'date_sold' => 'nullable|date',
            'sales_channel' => 'nullable|max:255',
            'sales_order_number' => 'nullable|max:50',
            'serial_number' => 'nullable|max:50',
        ]);
        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return response()->json(['message' => 'Product updated successfully']);
    }
}
?>