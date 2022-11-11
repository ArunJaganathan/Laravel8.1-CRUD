<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePicturesRequest;
use App\Http\Requests\UpdatePicturesRequest;
use App\Repositories\PicturesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PicturesController extends AppBaseController
{
    /** @var PicturesRepository $picturesRepository*/
    private $picturesRepository;

    public function __construct(PicturesRepository $picturesRepo)
    {
        $this->picturesRepository = $picturesRepo;
    }

    /**
     * Display a listing of the Pictures.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $pictures = $this->picturesRepository->all();

        return view('pictures.index')
            ->with('pictures', $pictures);
    }

    

    public function uploadCropImage(Request $request)
    {
        $folderPath = public_path('upload/');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
         $saveFile = new Picture;
         $saveFile->name = $imageName;
         $saveFile->save();
    
        return response()->json(['success'=>'Crop Image Uploaded Successfully']);
    }

    /**
     * Show the form for creating a new Pictures.
     *
     * @return Response
     */
    public function create()
    {
        return view('pictures.create');
    }

    /**
     * Store a newly created Pictures in storage.
     *
     * @param CreatePicturesRequest $request
     *
     * @return Response
     */
    public function store(CreatePicturesRequest $request)
    {
        $input = $request->all();

        $pictures = $this->picturesRepository->create($input);

        Flash::success(__('messages.saved', ['model' => __('models/pictures.singular')]));

        return redirect(route('pictures.index'));
    }

    /**
     * Display the specified Pictures.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $pictures = $this->picturesRepository->find($id);

        if (empty($pictures)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pictures.singular')]));

            return redirect(route('pictures.index'));
        }

        return view('pictures.show')->with('pictures', $pictures);
    }

    /**
     * Show the form for editing the specified Pictures.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $pictures = $this->picturesRepository->find($id);

        if (empty($pictures)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pictures.singular')]));

            return redirect(route('pictures.index'));
        }

        return view('pictures.edit')->with('pictures', $pictures);
    }

    /**
     * Update the specified Pictures in storage.
     *
     * @param int $id
     * @param UpdatePicturesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePicturesRequest $request)
    {
        $pictures = $this->picturesRepository->find($id);

        if (empty($pictures)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pictures.singular')]));

            return redirect(route('pictures.index'));
        }

        $pictures = $this->picturesRepository->update($request->all(), $id);

        Flash::success(__('messages.updated', ['model' => __('models/pictures.singular')]));

        return redirect(route('pictures.index'));
    }

    /**
     * Remove the specified Pictures from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $pictures = $this->picturesRepository->find($id);

        if (empty($pictures)) {
            Flash::error(__('messages.not_found', ['model' => __('models/pictures.singular')]));

            return redirect(route('pictures.index'));
        }

        $this->picturesRepository->delete($id);

        Flash::success(__('messages.deleted', ['model' => __('models/pictures.singular')]));

        return redirect(route('pictures.index'));
    }
}
