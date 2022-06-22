<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSellRequest;
use App\Http\Requests\UpdateSellRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Sell;
use Illuminate\Http\Request;
use Flash;
use Response;

class SellController extends AppBaseController
{
    /**
     * Display a listing of the Sell.
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        /** @var Sell $sells */
        $sells = Sell::paginate(10);

        return view('sells.index')
            ->with('sells', $sells);
    }

    /**
     * Show the form for creating a new Sell.
     */
    public function create()
    {
        $customers = Customer::pluck('name', 'id');
        $products = Product::pluck('name', 'id');

        return view('sells.create', compact('customers', 'products'));
    }

    /**
     * Store a newly created Sell in storage.
     *
     * @param CreateSellRequest $request
     *
     * @return Response
     */
    public function store(CreateSellRequest $request)
    {
        $input = $request->all();

        /** @var Sell $sell */
        $sell = Sell::create($input);

        Flash::success(__('messages.saved', ['model' => __('models/sells.singular')]));

        return redirect(route('sells.index'));
    }

    /**
     * Display the specified Sell.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Sell $sell */
        $sell = Sell::find($id);

        if (empty($sell)) {
            Flash::error(__('models/sells.singular').' '.__('messages.not_found'));

            return redirect(route('sells.index'));
        }

        return view('sells.show')->with('sell', $sell);
    }

    /**
     * Show the form for editing the specified Sell.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        /** @var Sell $sell */
        $sell = Sell::find($id);

        if (empty($sell)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sells.singular')]));

            return redirect(route('sells.index'));
        }

        $customers = Customer::pluck('name', 'id');
        $products = Product::pluck('name', 'id');
        return view('sells.edit', compact('sell', 'products', 'customers'));
    }

    /**
     * Update the specified Sell in storage.
     *
     * @param int $id
     * @param UpdateSellRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSellRequest $request)
    {
        /** @var Sell $sell */
        $sell = Sell::find($id);

        if (empty($sell)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sells.singular')]));

            return redirect(route('sells.index'));
        }

        $sell->fill($request->all());
        $sell->save();

        Flash::success(__('messages.updated', ['model' => __('models/sells.singular')]));

        return redirect(route('sells.index'));
    }

    /**
     * Remove the specified Sell from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Sell $sell */
        $sell = Sell::find($id);

        if (empty($sell)) {
            Flash::error(__('messages.not_found', ['model' => __('models/sells.singular')]));

            return redirect(route('sells.index'));
        }

        $sell->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/sells.singular')]));

        return redirect(route('sells.index'));
    }
}
