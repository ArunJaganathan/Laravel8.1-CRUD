<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version November 5, 2022, 1:37 pm UTC
*/

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'status',
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
        return Category::class;
    }
    public function createCategory(Request $request)
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
