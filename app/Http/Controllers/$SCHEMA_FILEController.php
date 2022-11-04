<?php

namespace App\Http\Controllers;

use App\Http\Requests\Create$SCHEMA_FILERequest;
use App\Http\Requests\Update$SCHEMA_FILERequest;
use App\Repositories\$SCHEMA_FILERepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class $SCHEMA_FILEController extends AppBaseController
{
    /** @var $SCHEMA_FILERepository $$SCHEMAFILERepository*/
    private $$SCHEMAFILERepository;

    public function __construct($SCHEMA_FILERepository $$SCHEMAFILERepo)
    {
        $this->$SCHEMAFILERepository = $$SCHEMAFILERepo;
    }

    /**
     * Display a listing of the $SCHEMA_FILE.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $$SCHEMAFILES = $this->$SCHEMAFILERepository->all();

        return view('$_s_c_h_e_m_a__f_i_l_e_s.index')
            ->with('$SCHEMAFILES', $$SCHEMAFILES);
    }

    /**
     * Show the form for creating a new $SCHEMA_FILE.
     *
     * @return Response
     */
    public function create()
    {
        return view('$_s_c_h_e_m_a__f_i_l_e_s.create');
    }

    /**
     * Store a newly created $SCHEMA_FILE in storage.
     *
     * @param Create$SCHEMA_FILERequest $request
     *
     * @return Response
     */
    public function store(Create$SCHEMA_FILERequest $request)
    {
        $input = $request->all();

        $$SCHEMAFILE = $this->$SCHEMAFILERepository->create($input);

        Flash::success('$ S C H E M A  F I L E saved successfully.');

        return redirect(route('$SCHEMAFILES.index'));
    }

    /**
     * Display the specified $SCHEMA_FILE.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $$SCHEMAFILE = $this->$SCHEMAFILERepository->find($id);

        if (empty($$SCHEMAFILE)) {
            Flash::error('$ S C H E M A  F I L E not found');

            return redirect(route('$SCHEMAFILES.index'));
        }

        return view('$_s_c_h_e_m_a__f_i_l_e_s.show')->with('$SCHEMAFILE', $$SCHEMAFILE);
    }

    /**
     * Show the form for editing the specified $SCHEMA_FILE.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $$SCHEMAFILE = $this->$SCHEMAFILERepository->find($id);

        if (empty($$SCHEMAFILE)) {
            Flash::error('$ S C H E M A  F I L E not found');

            return redirect(route('$SCHEMAFILES.index'));
        }

        return view('$_s_c_h_e_m_a__f_i_l_e_s.edit')->with('$SCHEMAFILE', $$SCHEMAFILE);
    }

    /**
     * Update the specified $SCHEMA_FILE in storage.
     *
     * @param int $id
     * @param Update$SCHEMA_FILERequest $request
     *
     * @return Response
     */
    public function update($id, Update$SCHEMA_FILERequest $request)
    {
        $$SCHEMAFILE = $this->$SCHEMAFILERepository->find($id);

        if (empty($$SCHEMAFILE)) {
            Flash::error('$ S C H E M A  F I L E not found');

            return redirect(route('$SCHEMAFILES.index'));
        }

        $$SCHEMAFILE = $this->$SCHEMAFILERepository->update($request->all(), $id);

        Flash::success('$ S C H E M A  F I L E updated successfully.');

        return redirect(route('$SCHEMAFILES.index'));
    }

    /**
     * Remove the specified $SCHEMA_FILE from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $$SCHEMAFILE = $this->$SCHEMAFILERepository->find($id);

        if (empty($$SCHEMAFILE)) {
            Flash::error('$ S C H E M A  F I L E not found');

            return redirect(route('$SCHEMAFILES.index'));
        }

        $this->$SCHEMAFILERepository->delete($id);

        Flash::success('$ S C H E M A  F I L E deleted successfully.');

        return redirect(route('$SCHEMAFILES.index'));
    }
}
