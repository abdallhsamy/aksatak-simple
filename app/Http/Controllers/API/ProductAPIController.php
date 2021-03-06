<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductAPIRequest;
use App\Http\Requests\API\UpdateProductAPIRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\ProductResource;
use Response;

/**
 * Class ProductController
 * @package App\Http\Controllers\API
 */

class ProductAPIController extends AppBaseController
{
    /**
     * Display a listing of the Product.
     * GET|HEAD /products
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $products = $query->get();

         return $this->sendResponse(
             ProductResource::collection($products),
             __('messages.retrieved', ['model' => __('models/products.plural')])
         );
    }

    /**
     * Store a newly created Product in storage.
     * POST /products
     *
     * @param CreateProductAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductAPIRequest $request)
    {
        $input = $request->all();

        /** @var Product $product */
        $product = Product::create($input);

        return $this->sendResponse(
             new ProductResource($product),
             __('messages.saved', ['model' => __('models/products.singular')])
        );
    }

    /**
     * Display the specified Product.
     * GET|HEAD /products/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Product $product */
        $product = Product::find($id);

        if (empty($product)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/products.singular')])
            );
        }

        return $this->sendResponse(
            new ProductResource($product),
            __('messages.retrieved', ['model' => __('models/products.singular')])
        );
    }

    /**
     * Update the specified Product in storage.
     * PUT/PATCH /products/{id}
     *
     * @param int $id
     * @param UpdateProductAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductAPIRequest $request)
    {
        /** @var Product $product */
        $product = Product::find($id);

        if (empty($product)) {
           return $this->sendError(
               __('messages.not_found', ['model' => __('models/products.singular')])
           );
        }

        $product->fill($request->all());
        $product->save();

        return $this->sendResponse(
             new ProductResource($product),
             __('messages.updated', ['model' => __('models/products.singular')])
        );
    }

    /**
     * Remove the specified Product from storage.
     * DELETE /products/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Product $product */
        $product = Product::find($id);

        if (empty($product)) {
           return $this->sendError(
                 __('messages.not_found', ['model' => __('models/products.singular')])
           );
        }

        $product->delete();

         return $this->sendResponse(
             $id,
             __('messages.deleted', ['model' => __('models/products.singular')])
         );
    }
}
