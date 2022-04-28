<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProductService;
use Exception;

class ProductController extends Controller
{
    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function getDataProduct(){
        try{
            $data = $this->productService->getProductList();
            return response()->json($data);
        }catch(Exception $e){ 
            return response()->json(['error' => $e->getMessage()],500);
        }

        return response()->json($data);
    }
}
