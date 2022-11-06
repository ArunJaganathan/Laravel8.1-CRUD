<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateProductTestAPIRequest;
use App\Http\Requests\API\UpdateProductTestAPIRequest;
use App\Models\ProductTest;
use App\Repositories\ProductTestRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class ProductTestController
 * @package App\Http\Controllers\API
 */

class ProductTestAPIController extends AppBaseController
{
    /** @var  ProductTestRepository */
    private $productTestRepository;

    public function __construct(ProductTestRepository $productTestRepo)
    {
        $this->productTestRepository = $productTestRepo;
    }

    /**
     * Display a listing of the ProductTest.
     * GET|HEAD /productTests
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $productTests = $this->productTestRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($productTests->toArray(), 'Product Tests retrieved successfully');
    }

    /**
     * Store a newly created ProductTest in storage.
     * POST /productTests
     *
     * @param CreateProductTestAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateProductTestAPIRequest $request)
    {
        $input = $request->all();

        $productTest = $this->productTestRepository->create($input);

        return $this->sendResponse($productTest->toArray(), 'Product Test saved successfully');
    }

    /**
     * Display the specified ProductTest.
     * GET|HEAD /productTests/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var ProductTest $productTest */
        $productTest = $this->productTestRepository->find($id);

        if (empty($productTest)) {
            return $this->sendError('Product Test not found');
        }

        return $this->sendResponse($productTest->toArray(), 'Product Test retrieved successfully');
    }

    /**
     * Update the specified ProductTest in storage.
     * PUT/PATCH /productTests/{id}
     *
     * @param int $id
     * @param UpdateProductTestAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductTestAPIRequest $request)
    {
        $input = $request->all();

        /** @var ProductTest $productTest */
        $productTest = $this->productTestRepository->find($id);

        if (empty($productTest)) {
            return $this->sendError('Product Test not found');
        }

        $productTest = $this->productTestRepository->update($input, $id);

        return $this->sendResponse($productTest->toArray(), 'ProductTest updated successfully');
    }

    /**
     * Remove the specified ProductTest from storage.
     * DELETE /productTests/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var ProductTest $productTest */
        $productTest = $this->productTestRepository->find($id);

        if (empty($productTest)) {
            return $this->sendError('Product Test not found');
        }

        $productTest->delete();

        return $this->sendSuccess('Product Test deleted successfully');
    }
}
