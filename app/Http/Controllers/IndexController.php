<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Banner;
use App\Models\SubCategory;
use DB;



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

    public function productcheckout($id)
    {
        $categories= Category::all();
        $products=Product::where('id',$id)->get();
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

    public function insertform(){
        return view('stud_create');
        }

        // $table->increments('id');
        // $table->string('name');
        // $table->string('fname');
        // $table->string('lname');
        // $table->string('phone');
        // $table->string('address');
        // $table->string('location');
        // $table->string('city');
        // $table->string('productname');
        // $table->string('itemprice');
        // $table->string('totalprice');
        // $table->string('product_id');
        // $table->string('user_id');

    public function insert(Request $request){
            $first_name = $request->input('fname');
            $last_name = $request->input('lname');
            $city_name = $request->input('city');
            $phone = $request->input('phone');
            $productname = $request->input('productname');
            $address = $request->input('address');
            $location = $request->input('location');
            $itemprice = $request->input('itemprice');
            $totalprice = $request->input('totalprice');
            $user_id = $request->input('user_id');
            $product_id = $request->input('product_id');
            // $totalprice = $request->input('totalprice');
            $data=array('fname'=>$first_name,"lname"=>$last_name,"city"=>$city_name,"productname"=>$productname
            ,"address"=>$address
            ,"location"=>$location
            ,"itemprice"=>$itemprice
            ,"totalprice"=>$totalprice
            ,"user_id"=>$user_id
            ,"phone"=>$phone
            ,"product_id"=>$product_id,


        );
            DB::table('orders')->insert($data);

   return back()->with('status', 'Success placed your order we will get back to you as soon as possible!');
            // echo '<a href = "/insert">Click Here</a> to go back.';
    }




}
