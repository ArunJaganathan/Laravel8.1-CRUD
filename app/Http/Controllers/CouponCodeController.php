<?php

namespace App\Http\Controllers;

use App\Models\Coupons;
use App\Repositories\CouponsRepository;
use App\Http\Requests\CreateCouponCodeRequest;
use App\Http\Requests\UpdateCouponCodeRequest;
use App\Repositories\CouponCodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CouponCodeController extends AppBaseController
{
    /** @var CouponCodeRepository $couponCodeRepository*/
    private $couponCodeRepository;
    private $couponRepository;

    public function __construct(CouponCodeRepository $couponCodeRepo,CouponsRepository $couponRepo)
    {
        $this->couponCodeRepository = $couponCodeRepo;
        $this->couponRepository = $couponRepo;
    }

    /**
     * Display a listing of the CouponCode.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $couponCodes = $this->couponCodeRepository->paginate(10);

        return view('coupon_codes.index')
            ->with('couponCodes', $couponCodes);
    }

    /**
     * Show the form for creating a new CouponCode.
     *
     * @return Response
     */
    public function create()
    {
        return view('coupon_codes.create');
    }

    /**
     * Store a newly created CouponCode in storage.
     *
     * @param CreateCouponCodeRequest $request
     *
     * @return Response
     */
    public function store(CreateCouponCodeRequest $request)
    {
        $input = $request->all();
        
        $input['gen_code'] = $this->couponCodeRepository->generateCode(3);
        $input['gen_code'] = $input['coupon_code'].'_'.$input['gen_code'];
        
        

        $couponCode = $this->couponCodeRepository->create($input);
        $coupon_count = $input['coupon_count'];
        for ($i=1; $i <=$coupon_count ; $i++) { 
            $data['codes'] = $input['gen_code'];
            $data['is_used'] = 0;
            $data['coupon_code_id'] =$couponCode->id;
            $data['status'] = 1;
            $data['user_id'] = 1;
            $data['date_used'] = date('Y-m-d');
            $codes = $this->couponRepository->create($data);
        }

        //echo '<pre>';print_r($couponCode);die;
        Flash::success(__('messages.saved', ['model' => __('models/couponCodes.singular')]));

        return redirect(route('couponCodes.index'));
    }

    /**
     * Display the specified CouponCode.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $couponCode = $this->couponCodeRepository->find($id);

        if (empty($couponCode)) {
            Flash::error(__('messages.not_found', ['model' => __('models/couponCodes.singular')]));

            return redirect(route('couponCodes.index'));
        }

        return view('coupon_codes.show')->with('couponCode', $couponCode);
    }

    /**
     * Show the form for editing the specified CouponCode.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $couponCode = $this->couponCodeRepository->find($id);

        if (empty($couponCode)) {
            Flash::error(__('messages.not_found', ['model' => __('models/couponCodes.singular')]));

            return redirect(route('couponCodes.index'));
        }

        return view('coupon_codes.edit')->with('couponCode', $couponCode);
    }

    /**
     * Update the specified CouponCode in storage.
     *
     * @param int $id
     * @param UpdateCouponCodeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCouponCodeRequest $request)
    {
        $couponCode = $this->couponCodeRepository->find($id);

        if (empty($couponCode)) {
            Flash::error(__('messages.not_found', ['model' => __('models/couponCodes.singular')]));

            return redirect(route('couponCodes.index'));
        }

        $couponCode = $this->couponCodeRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/couponCodes.singular')]));

        return redirect(route('couponCodes.index'));
    }

    /**
     * Remove the specified CouponCode from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $couponCode = $this->couponCodeRepository->find($id);

        if (empty($couponCode)) {
            Flash::error(__('messages.not_found', ['model' => __('models/couponCodes.singular')]));

            return redirect(route('couponCodes.index'));
        }

        $this->couponCodeRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/couponCodes.singular')]));

        return redirect(route('couponCodes.index'));
    }
}
