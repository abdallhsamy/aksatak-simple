<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateSellAPIRequest;
use App\Http\Requests\API\UpdateSellAPIRequest;
use App\Models\Sell;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\SellResource;
use Response;

/**
 * Class SellController
 * @package App\Http\Controllers\API
 */

class SellAPIController extends AppBaseController
{
    /**
     * Display a listing of the Sell.
     * GET|HEAD /sells
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $query = Sell::query();

        if ($request->get('skip')) {
            $query->skip($request->get('skip'));
        }
        if ($request->get('limit')) {
            $query->limit($request->get('limit'));
        }

        $sells = $query->get();

         return $this->sendResponse(
             SellResource::collection($sells),
             __('messages.retrieved', ['model' => __('models/sells.plural')])
         );
    }

    /**
     * Store a newly created Sell in storage.
     * POST /sells
     *
     * @param CreateSellAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateSellAPIRequest $request)
    {
        $input = $request->all();

        /** @var Sell $sell */
        $sell = Sell::create($input);

        return $this->sendResponse(
             new SellResource($sell),
             __('messages.saved', ['model' => __('models/sells.singular')])
        );
    }

    /**
     * Display the specified Sell.
     * GET|HEAD /sells/{id}
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
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/sells.singular')])
            );
        }

        return $this->sendResponse(
            new SellResource($sell),
            __('messages.retrieved', ['model' => __('models/sells.singular')])
        );
    }

    /**
     * Update the specified Sell in storage.
     * PUT/PATCH /sells/{id}
     *
     * @param int $id
     * @param UpdateSellAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSellAPIRequest $request)
    {
        /** @var Sell $sell */
        $sell = Sell::find($id);

        if (empty($sell)) {
           return $this->sendError(
               __('messages.not_found', ['model' => __('models/sells.singular')])
           );
        }

        $sell->fill($request->all());
        $sell->save();

        return $this->sendResponse(
             new SellResource($sell),
             __('messages.updated', ['model' => __('models/sells.singular')])
        );
    }

    /**
     * Remove the specified Sell from storage.
     * DELETE /sells/{id}
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
           return $this->sendError(
                 __('messages.not_found', ['model' => __('models/sells.singular')])
           );
        }

        $sell->delete();

         return $this->sendResponse(
             $id,
             __('messages.deleted', ['model' => __('models/sells.singular')])
         );
    }
}
