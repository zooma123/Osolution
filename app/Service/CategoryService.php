<?php

namespace App\Service;

use App\Models\Category;

class CategoryService
{
   
//Create The Category

    public function createCategory(array $data)
    {
        return Category::create($data);
    }

//Get All Categoris With Tasks in it 

    public function getAllCategories()
    {
        return Category::with('tasks')->get();
    }







}
