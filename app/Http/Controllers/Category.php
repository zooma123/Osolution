<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Service\CategoryService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class Category extends Controller
{

   // Injecting The Category Service  
protected $categoryservice ;

public function __construct(CategoryService $categoryservice)
{
    $this->categoryservice = $categoryservice ;
}




public function store(StoreCategoryRequest $request)
{
    try {
        $validated = $request->validated();
        $category = $this->categoryservice->createCategory($validated);

        return response()->json([
            'status' => 'success',
            'data' => $category
        ], 201);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'false',
            'message' => $e->getMessage()
        ], 500);
    }

}


public function index()
{
    try {
        $categories = $this->categoryservice->getAllCategories();
        return response()->json([
            'status' => 'success',
            'data' => $categories
        ], 200);

    } catch (\Exception $e) {
        return response()->json([
            'status' => 'false',
            'message' => $e->getMessage()
        ], 500);
    }
 





}
}