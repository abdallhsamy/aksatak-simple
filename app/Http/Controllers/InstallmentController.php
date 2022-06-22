<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInstallmentRequest;
use App\Http\Requests\UpdateInstallmentRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\Customer;
use App\Models\Installment;
use App\Models\Product;
use App\Models\Sell;
use Illuminate\Http\Request;
use Flash;
use Response;

class InstallmentController extends AppBaseController
{
    /**
     * Display a listing of the Installment.
     *
     * @param Request $request
     */
    public function index(Request $request)
    {
        /** @var Installment $installments */
        $installments = Installment::paginate(10);

        return view('installments.index')
            ->with('installments', $installments);
    }

    /**
     * Show the form for creating a new Installment.
     */
    public function create()
    {
        $customers = Customer::pluck('name', 'id');
        $products = Product::pluck('name', 'id');
        // $sells = Sell::pluck('id');

        $sells = Sell::with([
            'customer:id,name',
            'product:id,name',
        ])->select(
            'id',
            'customer_id',
            'product_id',
        )->get()->map(function ($sell) {
            return [$sell->id => $sell->customer->name . '|' . $sell->product->name];
        })->toArray();

//        dd( $sells);

        return view('installments.create', compact('customers','products', 'sells'));
    }

    /**
     * Store a newly created Installment in storage.
     *
     * @param CreateInstallmentRequest $request
     */
    public function store(CreateInstallmentRequest $request)
    {
        $input = $request->all();

        /** @var Installment $installment */
        $installment = Installment::create($input);

        $installment->sell->update([
            'paid_amount' => $installment->sell->paid_amount + $installment->amount
        ]);

        Flash::success(__('messages.saved', ['model' => __('models/installments.singular')]));

        return redirect(route('installments.index'));
    }

    /**
     * Display the specified Installment.
     *
     * @param int $id
     */
    public function show($id)
    {
        /** @var Installment $installment */
        $installment = Installment::find($id);

        if (empty($installment)) {
            Flash::error(__('models/installments.singular').' '.__('messages.not_found'));

            return redirect(route('installments.index'));
        }

        return view('installments.show')->with('installment', $installment);
    }

    /**
     * Show the form for editing the specified Installment.
     *
     * @param int $id
     */
    public function edit($id)
    {
        /** @var Installment $installment */
        $installment = Installment::find($id);

        if (empty($installment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/installments.singular')]));

            return redirect(route('installments.index'));
        }

        return view('installments.edit')->with('installment', $installment);
    }

    /**
     * Update the specified Installment in storage.
     *
     * @param int $id
     * @param UpdateInstallmentRequest $request
     */
    public function update($id, UpdateInstallmentRequest $request)
    {
        /** @var Installment $installment */
        $installment = Installment::find($id);

        if (empty($installment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/installments.singular')]));

            return redirect(route('installments.index'));
        }

        $installment->fill($request->all());
        $installment->save();

        Flash::success(__('messages.updated', ['model' => __('models/installments.singular')]));

        return redirect(route('installments.index'));
    }

    /**
     * Remove the specified Installment from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        /** @var Installment $installment */
        $installment = Installment::find($id);

        if (empty($installment)) {
            Flash::error(__('messages.not_found', ['model' => __('models/installments.singular')]));

            return redirect(route('installments.index'));
        }

        $installment->delete();

        Flash::success(__('messages.deleted', ['model' => __('models/installments.singular')]));

        return redirect(route('installments.index'));
    }
}
