<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\SubCategory;



class IndexController extends Controller
{
    //
    public function index()
    {
        $categories= Category::all();
        $products=Product::all();

  
        $productsphone= Product::where('category_id',4)->get();
        $productshome= Product::where('category_id',5)->get();
        $productsacces= Product::where('category_id',2)->get();
    

        $accesories = SubCategory::all();
        $covers = Tag::all();
        
        return view('welcome')
            ->with('categories', $categories)
            ->with('products',$products)
            ->with('subcategory',$accesories)
            ->with('productsphone',  $productsphone)
            ->with('productshome', $productshome)
            ->with('productsacces', $productsacces)
            ->with('tag',$covers);
    }
}
