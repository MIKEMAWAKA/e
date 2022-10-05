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

    public function productList()
    {
        $categories= Category::all();
        $products=Product::all();
        $banners=Banner::all();


        $productsphone= Product::where('category_id',4)->get();
        $productshome= Product::where('category_id',5)->get();
        $productsacces= Product::where('category_id',2)->get();


        $accesories = SubCategory::all();
        $covers = Tag::all();

        return view('productList')
            ->with('categories', $categories)
            ->with('products',$products)
            ->with('subcategories',$accesories)
            ->with('banners',$banners)
            ->with('productsphone',  $productsphone)
            ->with('productshome', $productshome)
            ->with('productsacces', $productsacces)
            ->with('tag',$covers);
    }




    public function productListcate($name,$id)
    {
        $categories= Category::all();
        $products=Product::where('subcategory_id',$id)->get();
        $banners=Banner::all();


        $productsphone= Product::where('category_id',4)->get();
        $productshome= Product::where('category_id',5)->get();
        $productsacces= Product::where('category_id',2)->get();


        $accesories = SubCategory::all();
        $covers = Tag::all();

        return view('productListcate')
            ->with('categories', $categories)
            ->with('products',$products)
            ->with('subcategories',$accesories)
            ->with('banners',$banners)
            ->with('productsphone',  $productsphone)
            ->with('productshome', $productshome)
            ->with('productsacces', $productsacces)
            ->with('tag',$covers);
    }





    public function indexshow($id,$subId)
    {

        $categories= Category::all();
        $products=Product::where('id',$id)->get();
        $subCateproduct=Product::where('subcategory_id',$subId)->get();
        $banners=Banner::all();
        $productstages=Product::all();


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
            ->with('subCateproducts',$subCateproduct)
            ->with('tags',$productstages)

            // ->with('$productscates',$productscates)
            ->with('tag',$covers);
    }


    public function showProducts(Request $request)
    {
       $products = Product::all();
       if($request->keyword != ''){
       $products = Product::where('name','LIKE','%'.$request->keyword.'%')->get();
       }
       return response()->json([
          'products' => $products
       ]);


    }

    public function productcheckout()
    {
        $categories= Category::all();
        $products=Product::all();
        $banners=Banner::all();


        $productsphone= Product::where('category_id',4)->get();
        $productshome= Product::where('category_id',5)->get();
        $productsacces= Product::where('category_id',2)->get();


        $accesories = SubCategory::all();
        $covers = Tag::all();

        return view('checkout')
            ->with('categories', $categories)
            ->with('products',$products)
            ->with('subcategories',$accesories)
            ->with('banners',$banners)
            ->with('productsphone',  $productsphone)
            ->with('productshome', $productshome)
            ->with('productsacces', $productsacces)
            ->with('tag',$covers);
    }



}
