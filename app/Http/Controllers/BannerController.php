<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Repositories\BannerRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Tag;
use Flash;
use Response;
use Image;
use App\Models\Banner;

class BannerController extends AppBaseController
{
    /** @var  BannerRepository */
    private $bannerRepository;

    public function __construct(BannerRepository $bannerRepo)
    {
        $this->bannerRepository = $bannerRepo;
    }

    /**
     * Display a listing of the Banner.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {


        

        $banners = $this->bannerRepository->all();

        return view('banners.index')
            ->with('banners', $banners);
    }

    /**
     * Show the form for creating a new Banner.
     *
     * @return Response
     */
    public function create()
    {
        $tags = Tag::all();
        return view('banners.create',['tags'=>$tags]);
       
    }

    /**
     * Store a newly created Banner in storage.
     *
     * @param CreateBannerRequest $request
     *
     * @return Response
     */
    public function store(CreateBannerRequest $request)
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
        $banner = Banner::create($data);

        if ($banner) {
            
            $destinationPath = public_path('/upload/images/banner');
            $img = Image::make($image->path());
            $img->resize(350, 300, function ($constraint) {
    
                $constraint->aspectRatio();
    
            })->save($destinationPath.'/'.$input['imagename']);
    
            // $image->move($destinationPath, $input['imagename']);

            //
          

           
    
       
       



            //

        }



        Flash::success('Banner saved successfully.');

        return redirect(route('banners.index'));
    }

    /**
     * Display the specified Banner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $banner = $this->bannerRepository->find($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('banners.index'));
        }

        return view('banners.show')->with('banner', $banner);
    }

    /**
     * Show the form for editing the specified Banner.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $banner = $this->bannerRepository->find($id);
        $tags = Tag::all();

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('banners.index'));
        }

        return view('banners.edit',['tags' => $tags])->with('banner', $banner);
    }

    /**
     * Update the specified Banner in storage.
     *
     * @param int $id
     * @param UpdateBannerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBannerRequest $request)
    {
        $banner = $this->bannerRepository->find($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('banners.index'));
        }

        $banner = $this->bannerRepository->update($request->all(), $id);

        Flash::success('Banner updated successfully.');

        return redirect(route('banners.index'));
    }

    /**
     * Remove the specified Banner from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $banner = $this->bannerRepository->find($id);

        if (empty($banner)) {
            Flash::error('Banner not found');

            return redirect(route('banners.index'));
        }

        $this->bannerRepository->delete($id);

        Flash::success('Banner deleted successfully.');

        return redirect(route('banners.index'));
    }
}
