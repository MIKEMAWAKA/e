<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use App\Models\SubCategory;
use Image;
use App\Models\Tag;
use Flash;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        $category = Category::all();
        $subcategory = SubCategory::all();
        $tags = Tag::all();
        return view('products.create',['categories'=> $category,'subcategories'=> $subcategory,'tags'=>$tags]);
        // return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        //

        $this->validate($request, [

            'images' => 'required',

            'images.*' => 'image'

    ]);


   

    if($request->hasfile('images'))

     {
        $product = Product::create($input);

        foreach($request->file('images') as $file)

        {

            $name = time().rand(1,100).'.'.$file->extension();

            // $file->move(public_path('/upload/images/product'), $name);  
            $destinationPath = public_path('/upload/images/product');
            $img = Image::make($file->path());
            $img->resize(250, 300, function ($constraint) {
    
                $constraint->aspectRatio();
    
            })->save($destinationPath.'/'.$name);


                // $file->move(public_path('/uploads/product/images'), $name);



          

            ProductImage::create([
                'product_id' => $product->id,
                'name' => $name
                ]);

     

        }

     }

        Flash::success('Product saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $category = Category::all();
        $subcategory = SubCategory::all();
        $tags = Tag::all();
        return view('products.edit', ['categories' => $category, 'subcategories' => $subcategory, 'tags' => $tags])->with('product', $product);
        // return view('products.create');

        // return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $product = $this->productRepository->update($request->all(), $id);

        Flash::success('Product updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Flash::error('Product not found');

            return redirect(route('products.index'));
        }

        $this->productRepository->delete($id);

        Flash::success('Product deleted successfully.');

        return redirect(route('products.index'));
    }
}
