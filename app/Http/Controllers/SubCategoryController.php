<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Repositories\SubCategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use App\Models\Tag;
use Flash;
use Image;
use Response;

class SubCategoryController extends AppBaseController
{
    /** @var  SubCategoryRepository */
    private $subCategoryRepository;

    public function __construct(SubCategoryRepository $subCategoryRepo)
    {
        $this->subCategoryRepository = $subCategoryRepo;
    }

    /**
     * Display a listing of the SubCategory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $subCategories = $this->subCategoryRepository->all();

        return view('sub_categories.index')
            ->with('subCategories', $subCategories);
    }

    /**
     * Show the form for creating a new SubCategory.
     *
     * @return Response
     */
    public function create()
    {
        $category = Category::all();
        $tags = Tag::all();
        return view('sub_categories.create',['categories'=> $category,'tags'=>$tags]);
        
    }

    /**
     * Store a newly created SubCategory in storage.
     *
     * @param CreateSubCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateSubCategoryRequest $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'image' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',

        ]);

        $image = $request->file('image');
        //get image name
        $input['imagename'] = $image->getClientOriginalName();
//image saving destination





        $data = $request->all();
        $data['image'] = $input['imagename'];
        $banner = SubCategory::create($data);

        if ($banner) {
            $destinationPath = public_path('/upload/images/subcategory');
            $img = Image::make($image->path());
            $img->resize(100, 100, function ($constraint) {
    
                $constraint->aspectRatio();
    
            })->save($destinationPath.'/'.$input['imagename']);


        }



        Flash::success('Sub Category saved successfully.');

        return redirect(route('subCategories.index'));
    }

    /**
     * Display the specified SubCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subCategory = $this->subCategoryRepository->find($id);

        if (empty($subCategory)) {
            Flash::error('Sub Category not found');

            return redirect(route('subCategories.index'));
        }

        return view('sub_categories.show')->with('subCategory', $subCategory);
    }

    /**
     * Show the form for editing the specified SubCategory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subCategory = $this->subCategoryRepository->find($id);
        $category = Category::all();
        $tags = Tag::all();

        if (empty($subCategory)) {
            Flash::error('Sub Category not found');

            return redirect(route('subCategories.index'));
        }

        return view('sub_categories.edit',['categories'=> $category,'tags'=>$tags])->with('subCategory', $subCategory);
    }

    /**
     * Update the specified SubCategory in storage.
     *
     * @param int $id
     * @param UpdateSubCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubCategoryRequest $request)
    {
        $subCategory = $this->subCategoryRepository->find($id);

        if (empty($subCategory)) {
            Flash::error('Sub Category not found');

            return redirect(route('subCategories.index'));
        }

        $subCategory = $this->subCategoryRepository->update($request->all(), $id);

        Flash::success('Sub Category updated successfully.');

        return redirect(route('subCategories.index'));
    }

    /**
     * Remove the specified SubCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subCategory = $this->subCategoryRepository->find($id);

        if (empty($subCategory)) {
            Flash::error('Sub Category not found');

            return redirect(route('subCategories.index'));
        }

        $this->subCategoryRepository->delete($id);

        Flash::success('Sub Category deleted successfully.');

        return redirect(route('subCategories.index'));
    }
}
