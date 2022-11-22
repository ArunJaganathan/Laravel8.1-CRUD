<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCouponsRequest;
use App\Http\Requests\UpdateCouponsRequest;
use App\Repositories\CouponsRepository;
use App\Models\CouponCode;
use App\Repositories\CouponCodeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Carbon\Carbon;

class CouponsController extends AppBaseController
{
    /** @var CouponsRepository $couponsRepository*/
    private $couponsRepository;
    private $couponCodeRepository;

    public function __construct(CouponsRepository $couponsRepo,CouponCodeRepository $couponCodeRepo)
    {
        $this->couponsRepository = $couponsRepo;
        $this->couponCodeRepository = $couponCodeRepo;
    }

    /**
     * Display a listing of the Coupons.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $coupons = $this->couponsRepository->all();

        return view('coupons.index')
            ->with('coupons', $coupons);
    }

    /**
     * Show the form for creating a new Coupons.
     *
     * @return Response
     */
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created Coupons in storage.
     *
     * @param CreateCouponsRequest $request
     *
     * @return Response
     */
    public function store(CreateCouponsRequest $request)
    {
        $input = $request->all();

        $coupons = $this->couponsRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/coupons.singular')]));

        return redirect(route('coupons.index'));
    }

    /**
     * Display the specified Coupons.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $coupons                    = $this->couponsRepository->find($id);
        $couponCode                 = $this->couponCodeRepository->find($id);        
        $coupons['coupon_name']     = $couponCode['coupon_code'];
        $coupons['coupon_status']   = $couponCode['status'] == 1 ?'Active':'In-Active';
        $coupons['start_date']      = date('d-M-Y H:i A', strtotime($couponCode['start_date']));
        $coupons['expiry_date']     = date('d-M-Y H:i A', strtotime($couponCode['expiry_date']));
        $coupons['date_usedq']      = date('d-M-Y', strtotime($coupons['date_used']));
        $coupons['coupon_type']     = $couponCode['coupon_type'] == 1 ? 'Percentage %' : 'Cash ' ;

        $start                      = Carbon::parse($couponCode['start_date'])->format('Y/m/d');
        $end                        = Carbon::parse($couponCode['expiry_date'])->format('Y/m/d');
        $diff                       = Carbon::parse( $end )->longRelativeDiffForHumans( $start );
        //$days = $end->diffInDays($start);
        //$balDays =  Carbon::parse($couponCode['expiry_date'])->diffForHumans($couponCode['start_date']);       

        $coupons['balDays']         = $diff;
        $couponsData = $this->couponsRepository->getCouponsById($id);
        foreach ($couponsData as $key => $value) {
            $q[$key]['codex']       = $value['codes'];
            $q[$key]['is_usedx']    = $value['is_used'] == 1 ? '<i class="fas fa-lock" style="font-size:24px;color:red"></i>' : '<i class="fas fa-lock-open" style="font-size:24px;color:green"></i>';
            $q[$key]['is_usedq']    = $value['is_used'];
            $q[$key]['user_idx']    = $value['user_id'];
            $q[$key]['date_usedx']  = date('d-M-Y', strtotime($value['date_used']));
        }
        $coupons['q']               = $q;

        $usedCount = 0;
        $coupons['coupon_bal']     =  array_count_values(array_column($q, 'is_usedq'))[$usedCount];


        if (empty($coupons)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coupons.singular')]));

            return redirect(route('coupons.index'));
        }

        return view('coupons.show')->with('coupons', $coupons,'couponCode', $couponCode);
    }

    /**
     * Show the form for editing the specified Coupons.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $coupons = $this->couponsRepository->find($id);

        if (empty($coupons)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coupons.singular')]));

            return redirect(route('coupons.index'));
        }

        return view('coupons.edit')->with('coupons', $coupons);
    }

    /**
     * Update the specified Coupons in storage.
     *
     * @param int $id
     * @param UpdateCouponsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCouponsRequest $request)
    {
        $coupons = $this->couponsRepository->find($id);

        if (empty($coupons)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coupons.singular')]));

            return redirect(route('coupons.index'));
        }

        $coupons = $this->couponsRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/coupons.singular')]));

        return redirect(route('coupons.index'));
    }

    /**
     * Remove the specified Coupons from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $coupons = $this->couponsRepository->find($id);

        if (empty($coupons)) {
            Flash::error(__('messages.not_found', ['model' => __('models/coupons.singular')]));

            return redirect(route('coupons.index'));
        }

        $this->couponsRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/coupons.singular')]));

        return redirect(route('coupons.index'));
    }

    public function apicoupons()
    {
        $coupons = $this->couponsRepository->all();
        echo json_encode($coupons);die;
    }
}
