<?php

namespace App\Http\Controllers;

use App\DataTables\TestModelDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTestModelRequest;
use App\Http\Requests\UpdateTestModelRequest;
use App\Repositories\TestModelRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TestModelController extends AppBaseController
{
    /** @var TestModelRepository $testModelRepository*/
    private $testModelRepository;

    public function __construct(TestModelRepository $testModelRepo)
    {
        $this->testModelRepository = $testModelRepo;
    }

    /**
     * Display a listing of the TestModel.
     *
     * @param TestModelDataTable $testModelDataTable
     *
     * @return Response
     */
    public function index(TestModelDataTable $testModelDataTable)
    {
        return $testModelDataTable->render('test_models.index');
    }

    /**
     * Show the form for creating a new TestModel.
     *
     * @return Response
     */
    public function create()
    {
        return view('test_models.create');
    }

    /**
     * Store a newly created TestModel in storage.
     *
     * @param CreateTestModelRequest $request
     *
     * @return Response
     */
    public function store(CreateTestModelRequest $request)
    {
        $input = $request->all();

        $testModel = $this->testModelRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/testModels.singular')]));

        return redirect(route('testModels.index'));
    }

    /**
     * Display the specified TestModel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testModel = $this->testModelRepository->find($id);

        if (empty($testModel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/testModels.singular')]));

            return redirect(route('testModels.index'));
        }

        return view('test_models.show')->with('testModel', $testModel);
    }

    /**
     * Show the form for editing the specified TestModel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testModel = $this->testModelRepository->find($id);

        if (empty($testModel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/testModels.singular')]));

            return redirect(route('testModels.index'));
        }

        return view('test_models.edit')->with('testModel', $testModel);
    }

    /**
     * Update the specified TestModel in storage.
     *
     * @param int $id
     * @param UpdateTestModelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestModelRequest $request)
    {
        $testModel = $this->testModelRepository->find($id);

        if (empty($testModel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/testModels.singular')]));

            return redirect(route('testModels.index'));
        }

        $testModel = $this->testModelRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/testModels.singular')]));

        return redirect(route('testModels.index'));
    }

    /**
     * Remove the specified TestModel from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testModel = $this->testModelRepository->find($id);

        if (empty($testModel)) {
            Flash::error(__('messages.not_found', ['model' => __('models/testModels.singular')]));

            return redirect(route('testModels.index'));
        }

        $this->testModelRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/testModels.singular')]));

        return redirect(route('testModels.index'));
    }
}
