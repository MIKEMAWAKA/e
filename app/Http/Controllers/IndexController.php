<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Banner;
use App\Models\SubCategory;



class IndexController extends Controller
{
    //
    public function index()
    {
        $categories= Category::all();
        $products=Product::all();
        $banners=Banner::all();

  
        $productsphone= Product::where('category_id',4)->get();
        $productshome= Product::where('category_id',5)->get();
        $productsacces= Product::where('category_id',2)->get();
    

        $accesories = SubCategory::all();
        $covers = Tag::all();
        
        return view('welcome')
            ->with('categories', $categories)
            ->with('products',$products)
            ->with('subcategories',$accesories)
            ->with('banners',$banners)
            ->with('productsphone',  $productsphone)
            ->with('productshome', $productshome)
            ->with('productsacces', $productsacces)
            ->with('tag',$covers);
    }

    public function indexshow($id)
    {
        $categories= Category::all();
        $products=Product::where('id',$id)->get();
        $banners=Banner::all();

  
        // $productsphone= Product::where('category_id',4)->get();
        // $productshome= Product::where('category_id',5)->get();
        // $productsacces= Product::where('category_id',2)->get();

        // $productscates=Product::where('subcategory_id',$products->subcategory_id)->get();
    

        $accesories = SubCategory::all();
        $covers = Tag::all();
        
        return view('singleproduct')
            ->with('categories', $categories)
            ->with('products',$products)
            ->with('subcategories',$accesories)
            ->with('banners',$banners)
            // ->with('$productscates',$productscates)
            ->with('tag',$covers);
    }
}
