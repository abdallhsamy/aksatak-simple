<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCustomerAPIRequest;
use App\Http\Requests\API\UpdateCustomerAPIRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\CustomerResource;
use Response;

/**
 * Class CustomerController
 * @package App\Http\Controllers\API
 */

class CustomerAPIController extends AppBaseController
{
    /**
     * Display a listing of the Customer.
     * GET|HEAD /customers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Customer::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $customers = $query->get();

         return $this->sendResponse(
             CustomerResource::collection($customers),
             __('messages.retrieved', ['model' => __('models/customers.plural')])
         );
    }

    /**
     * Store a newly created Customer in storage.
     * POST /customers
     *
     * @param CreateCustomerAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomerAPIRequest $request)
    {
        $input = $request->all();

        /** @var Customer $customer */
        $customer = Customer::create($input);

        return $this->sendResponse(
             new CustomerResource($customer),
             __('messages.saved', ['model' => __('models/customers.singular')])
        );
    }

    /**
     * Display the specified Customer.
     * GET|HEAD /customers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Customer $customer */
        $customer = Customer::find($id);

        if (empty($customer)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/customers.singular')])
            );
        }

        return $this->sendResponse(
            new CustomerResource($customer),
            __('messages.retrieved', ['model' => __('models/customers.singular')])
        );
    }

    /**
     * Update the specified Customer in storage.
     * PUT/PATCH /customers/{id}
     *
     * @param int $id
     * @param UpdateCustomerAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomerAPIRequest $request)
    {
        /** @var Customer $customer */
        $customer = Customer::find($id);

        if (empty($customer)) {
           return $this->sendError(
               __('messages.not_found', ['model' => __('models/customers.singular')])
           );
        }

        $customer->fill($request->all());
        $customer->save();

        return $this->sendResponse(
             new CustomerResource($customer),
             __('messages.updated', ['model' => __('models/customers.singular')])
        );
    }

    /**
     * Remove the specified Customer from storage.
     * DELETE /customers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Customer $customer */
        $customer = Customer::find($id);

        if (empty($customer)) {
           return $this->sendError(
                 __('messages.not_found', ['model' => __('models/customers.singular')])
           );
        }

        $customer->delete();

         return $this->sendResponse(
             $id,
             __('messages.deleted', ['model' => __('models/customers.singular')])
         );
    }
}
