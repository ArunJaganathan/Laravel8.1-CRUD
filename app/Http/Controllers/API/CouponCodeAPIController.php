<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCouponCodeAPIRequest;
use App\Http\Requests\API\UpdateCouponCodeAPIRequest;
use App\Models\CouponCode;
use App\Repositories\CouponCodeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CouponCodeController
 * @package App\Http\Controllers\API
 */

class CouponCodeAPIController extends AppBaseController
{
    /** @var  CouponCodeRepository */
    private $couponCodeRepository;

    public function __construct(CouponCodeRepository $couponCodeRepo)
    {
        $this->couponCodeRepository = $couponCodeRepo;
    }

    /**
     * Display a listing of the CouponCode.
     * GET|HEAD /couponCodes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $couponCodes = $this->couponCodeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(
            $couponCodes->toArray(),
            __('messages.retrieved', ['model' => __('models/couponCodes.plural')])
        );
    }

    /**
     * Store a newly created CouponCode in storage.
     * POST /couponCodes
     *
     * @param CreateCouponCodeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCouponCodeAPIRequest $request)
    {
        $input = $request->all();

        $couponCode = $this->couponCodeRepository->create($input);

        return $this->sendResponse(
            $couponCode->toArray(),
            __('messages.saved', ['model' => __('models/couponCodes.singular')])
        );
    }

    /**
     * Display the specified CouponCode.
     * GET|HEAD /couponCodes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var CouponCode $couponCode */
        $couponCode = $this->couponCodeRepository->find($id);

        if (empty($couponCode)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/couponCodes.singular')])
            );
        }

        return $this->sendResponse(
            $couponCode->toArray(),
            __('messages.retrieved', ['model' => __('models/couponCodes.singular')])
        );
    }

    /**
     * Update the specified CouponCode in storage.
     * PUT/PATCH /couponCodes/{id}
     *
     * @param int $id
     * @param UpdateCouponCodeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCouponCodeAPIRequest $request)
    {
        $input = $request->all();

        /** @var CouponCode $couponCode */
        $couponCode = $this->couponCodeRepository->find($id);

        if (empty($couponCode)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/couponCodes.singular')])
            );
        }

        $couponCode = $this->couponCodeRepository->update($input, $id);

        return $this->sendResponse(
            $couponCode->toArray(),
            __('messages.updated', ['model' => __('models/couponCodes.singular')])
        );
    }

    /**
     * Remove the specified CouponCode from storage.
     * DELETE /couponCodes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var CouponCode $couponCode */
        $couponCode = $this->couponCodeRepository->find($id);

        if (empty($couponCode)) {
            return $this->sendError(
                __('messages.not_found', ['model' => __('models/couponCodes.singular')])
            );
        }

        $couponCode->delete();

        return $this->sendResponse(
            $id,
            __('messages.deleted', ['model' => __('models/couponCodes.singular')])
        );
    }
}
