<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateInstallmentAPIRequest;
use App\Http\Requests\API\UpdateInstallmentAPIRequest;
use App\Models\Installment;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\InstallmentResource;
use Response;

/**
 * Class InstallmentController
 * @package App\Http\Controllers\API
 */

class InstallmentAPIController extends AppBaseController
{
    /**
     * Display a listing of the Installment.
     * GET|HEAD /installments
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Installment::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $installments = $query->get();

         return $this->sendResponse(
             InstallmentResource::collection($installments),
             __('messages.retrieved', ['model' => __('models/installments.plural')])
         );
    }

    /**
     * Store a newly created Installment in storage.
     * POST /installments
     *
     * @param CreateInstallmentAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateInstallmentAPIRequest $request)
    {
        $input = $request->all();

        /** @var Installment $installment */
        $installment = Installment::create($input);

        return $this->sendResponse(
             new InstallmentResource($installment),
             __('messages.saved', ['model' => __('models/installments.singular')])
        );
    }

    /**
     * Display the specified Installment.
     * GET|HEAD /installments/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Installment $installment */
        $installment = Installment::find($id);

        if (empty($installment)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/installments.singular')])
            );
        }

        return $this->sendResponse(
            new InstallmentResource($installment),
            __('messages.retrieved', ['model' => __('models/installments.singular')])
        );
    }

    /**
     * Update the specified Installment in storage.
     * PUT/PATCH /installments/{id}
     *
     * @param int $id
     * @param UpdateInstallmentAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInstallmentAPIRequest $request)
    {
        /** @var Installment $installment */
        $installment = Installment::find($id);

        if (empty($installment)) {
           return $this->sendError(
               __('messages.not_found', ['model' => __('models/installments.singular')])
           );
        }

        $installment->fill($request->all());
        $installment->save();

        return $this->sendResponse(
             new InstallmentResource($installment),
             __('messages.updated', ['model' => __('models/installments.singular')])
        );
    }

    /**
     * Remove the specified Installment from storage.
     * DELETE /installments/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Installment $installment */
        $installment = Installment::find($id);

        if (empty($installment)) {
           return $this->sendError(
                 __('messages.not_found', ['model' => __('models/installments.singular')])
           );
        }

        $installment->delete();

         return $this->sendResponse(
             $id,
             __('messages.deleted', ['model' => __('models/installments.singular')])
         );
    }
}
