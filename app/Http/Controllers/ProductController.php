<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use App\Enums\ProductStatusEnum;
  
class ProductController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $input = [
            'name' => 'Gold',
            'body' => 'This is a Gold',
            'status' => ProductStatusEnum::Active
        ];
  
        $product = Product::create($input);
  
        dd($product->status, $product->status->value);
  
    }
}