<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;


class AddProductController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Request data: ' . json_encode($request->all()));
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'quantity_on_hand' => 'required|integer|min:0',
            'reorder_level' => 'required|integer|min:0',
            'cost' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'supplier_info' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'date_received' => 'nullable|date',
            'date_sold' => 'nullable|date',
            'sales_channel' => 'nullable|string|max:255',
            'sales_order_number' => 'nullable|string|max:255',
            'serial_number' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $product = new Product();

        $product->name = $request->input('name');
        $product->code = $request->input('code');
        $product->description = $request->input('description');
        $product->quantity_on_hand = $request->input('quantity_on_hand');
        $product->reorder_level = $request->input('reorder_level');
        $product->cost = $request->input('cost');
        $product->selling_price = $request->input('selling_price');
        $product->supplier_info = $request->input('supplier_info');
        $product->location = $request->input('location');
        $product->date_received = $request->input('date_received');
        $product->date_sold = $request->input('date_sold');
        $product->sales_channel = $request->input('sales_channel');
        $product->sales_order_number = $request->input('sales_order_number');
        $product->serial_number = $request->input('serial_number');
        $product->save();

        return response()->json($product, 201);
    }
}


/*
 * 
 * sample data
 
{
    "name" : "Samsung Galaxy S21",
    "product_code" : "S21",
    "description" : "5G Android smartphone with 6.2 inch Dynamic AMOLED display, 8GB RAM, 128GB storage, and triple camera system.",
    "quantity_on_hand" : 10,
    "reorder_level" : 5,
    "cost" : 21000,
    "selling_price" : 22000,
    "supplier_info" : "Samsung Electronics",
    "location" : "Warehouse A, Shelf 3",
    "date_received" : "2022-04-15",
    "date_sold" :"N/A",
    "sales_channel" :"Online Store",
    "sales_order_number" :"N/A",
    "serial_number" :"S21-12345678"
}

 */