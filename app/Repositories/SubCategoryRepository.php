<?php

namespace App\Repositories;

use App\Models\SubCategory;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
/**
 * Class SubCategoryRepository
 * @package App\Repositories
 * @version November 4, 2022, 8:15 am UTC
*/

class SubCategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'desc',
        'image'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return SubCategory::class;
    }

    public function createPost(Request $request)
    {
        $file       = $request->file('image');
        $org_file   = $file->getClientOriginalName();
        $ext        = $file->getClientOriginalExtension();

        $uqId       =  uniqid();
        $path       = 'upload/'.$uqId.'.'.$ext;
        $pathThumb  = 'upload/thumb/'.$uqId.'.'.$ext;

        $image      = Image::make($file)->insert(public_path('logo.png'));
        //$image->crop(100, 100);
        $thumb      = Image::make($file)->resize(100, 100)->insert(public_path('logo.png'));
        $image->save(public_path($path));
        $image->save(public_path($pathThumb));
        $input      = $request->all();
        $input['image'] = $path;
        return $this->create($input);
    }
}
