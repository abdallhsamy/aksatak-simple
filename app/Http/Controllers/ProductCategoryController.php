<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Support\Facades\Response;

class ProductCategoryController extends AppBaseController
{
    public function index(Request $request)
    {
        /** @var ProductCategory $productCategories */
        $productCategories = ProductCategory::paginate(10);

        return view('product_categories.index')
            ->with('productCategories', $productCategories);
    }

    /**
     * Show the form for creating a new ProductCategory.
     */
    public function create()
    {
        return view('product_categories.create');
    }

    /**
     * Store a newly created ProductCategory in storage.
     *
     * @param CreateProductCategoryRequest $request
     */
    public function store(CreateProductCategoryRequest $request)
    {
        $input = $request->all();

        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/productCategories.singular')]));

        return redirect(route('productCategories.index'));
    }

    /**
     * Display the specified ProductCategory.
     *
     * @param int $id
     */
    public function show($id)
    {
        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::find($id);

        if (empty($productCategory)) {
            Flash::error(__('models/productCategories.singular').' '.__('messages.not_found'));

            return redirect(route('productCategories.index'));
        }

        return view('product_categories.show')->with('productCategory', $productCategory);
    }

    /**
     * Show the form for editing the specified ProductCategory.
     *
     * @param int $id
     */
    public function edit($id)
    {
        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::find($id);

        if (empty($productCategory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productCategories.singular')]));

            return redirect(route('productCategories.index'));
        }

        return view('product_categories.edit')->with('productCategory', $productCategory);
    }

    /**
     * Update the specified ProductCategory in storage.
     *
     * @param int $id
     * @param UpdateProductCategoryRequest $request
     */
    public function update($id, UpdateProductCategoryRequest $request)
    {
        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::find($id);

        if (empty($productCategory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productCategories.singular')]));

            return redirect(route('productCategories.index'));
        }

        $productCategory->fill($request->all());
        $productCategory->save();

        Flash::success(__('messages.updated', ['model' => __('models/productCategories.singular')]));

        return redirect(route('productCategories.index'));
    }

    /**
     * Remove the specified ProductCategory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var ProductCategory $productCategory */
        $productCategory = ProductCategory::find($id);

        if (empty($productCategory)) {
            Flash::error(__('messages.not_found', ['model' => __('models/productCategories.singular')]));

            return redirect(route('productCategories.index'));
        }

        $productCategory->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/productCategories.singular')]));

        return redirect(route('productCategories.index'));
    }
}
