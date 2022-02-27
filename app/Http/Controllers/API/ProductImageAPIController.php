<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductImageAPIRequest;
use App\Http\Requests\API\UpdateProductImageAPIRequest;
use App\Models\ProductImage;
use App\Repositories\ProductImageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProductImageController
 * @package App\Http\Controllers\API
 */

class ProductImageAPIController extends AppBaseController
{
    /** @var  ProductImageRepository */
    private $productImageRepository;

    public function __construct(ProductImageRepository $productImageRepo)
    {
        $this->productImageRepository = $productImageRepo;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @SWG\Get(
     *      path="/productImages",
     *      summary="Get a listing of the ProductImages.",
     *      tags={"ProductImage"},
     *      description="Get all ProductImages",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/ProductImage")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $productImages = $this->productImageRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($productImages->toArray(), 'Product Images retrieved successfully');
    }

    /**
     * @param CreateProductImageAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/productImages",
     *      summary="Store a newly created ProductImage in storage",
     *      tags={"ProductImage"},
     *      description="Store ProductImage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProductImage that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProductImage")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ProductImage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateProductImageAPIRequest $request)
    {
        $input = $request->all();

        $productImage = $this->productImageRepository->create($input);

        return $this->sendResponse($productImage->toArray(), 'Product Image saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/productImages/{id}",
     *      summary="Display the specified ProductImage",
     *      tags={"ProductImage"},
     *      description="Get ProductImage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductImage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ProductImage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var ProductImage $productImage */
        $productImage = $this->productImageRepository->find($id);

        if (empty($productImage)) {
            return $this->sendError('Product Image not found');
        }

        return $this->sendResponse($productImage->toArray(), 'Product Image retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateProductImageAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/productImages/{id}",
     *      summary="Update the specified ProductImage in storage",
     *      tags={"ProductImage"},
     *      description="Update ProductImage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductImage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ProductImage that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ProductImage")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ProductImage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateProductImageAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProductImage $productImage */
        $productImage = $this->productImageRepository->find($id);

        if (empty($productImage)) {
            return $this->sendError('Product Image not found');
        }

        $productImage = $this->productImageRepository->update($input, $id);

        return $this->sendResponse($productImage->toArray(), 'ProductImage updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/productImages/{id}",
     *      summary="Remove the specified ProductImage from storage",
     *      tags={"ProductImage"},
     *      description="Delete ProductImage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ProductImage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var ProductImage $productImage */
        $productImage = $this->productImageRepository->find($id);

        if (empty($productImage)) {
            return $this->sendError('Product Image not found');
        }

        $productImage->delete();

        return $this->sendSuccess('Product Image deleted successfully');
    }
}
