<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductCategoryAPIRequest;
use App\Http\Requests\API\UpdateProductCategoryAPIRequest;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\ProductCategoryResource;
use Response;

/**
 * Class ProductCategoryController
 * @package App\Http\Controllers\API
 */

class ProductCategoryAPIController extends AppBaseController
{
    /**
     * Display a listing of the ProductCategory.
     * GET|HEAD /productCategories
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = ProductCategory::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $productCategories = $query->get();

         return $this->sendResponse(
             ProductCategoryResource::collection($productCategories),
             __('messages.retrieved', ['model' => __('models/productCategories.plural')])
         );
    }

    /**
     * Store a newly created ProductCategory in storage.
     * POST /productCategories
     *
     * @param CreateProductCategoryAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductCategoryAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::create($input);

        return $this->sendResponse(
             new ProductCategoryResource($productCategory),
             __('messages.saved', ['model' => __('models/productCategories.singular')])
        );
    }

    /**
     * Display the specified ProductCategory.
     * GET|HEAD /productCategories/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::find($id);

        if (empty($productCategory)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/productCategories.singular')])
            );
        }

        return $this->sendResponse(
            new ProductCategoryResource($productCategory),
            __('messages.retrieved', ['model' => __('models/productCategories.singular')])
        );
    }

    /**
     * Update the specified ProductCategory in storage.
     * PUT/PATCH /productCategories/{id}
     *
     * @param int $id
     * @param UpdateProductCategoryAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductCategoryAPIRequest $request)
    {
        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::find($id);

        if (empty($productCategory)) {
           return $this->sendError(
               __('messages.not_found', ['model' => __('models/productCategories.singular')])
           );
        }

        $productCategory->fill($request->all());
        $productCategory->save();

        return $this->sendResponse(
             new ProductCategoryResource($productCategory),
             __('messages.updated', ['model' => __('models/productCategories.singular')])
        );
    }

    /**
     * Remove the specified ProductCategory from storage.
     * DELETE /productCategories/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::find($id);

        if (empty($productCategory)) {
           return $this->sendError(
                 __('messages.not_found', ['model' => __('models/productCategories.singular')])
           );
        }

        $productCategory->delete();

         return $this->sendResponse(
             $id,
             __('messages.deleted', ['model' => __('models/productCategories.singular')])
         );
    }
}
