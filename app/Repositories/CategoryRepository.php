<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories
 * @version November 13, 2022, 11:37 am UTC
*/

class CategoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'slug',
        'parent_id'
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
    public function categorytree()
    {
        
        $categories = Category::where('parent_id', null)->orderby('id', 'desc')->get();
        foreach ($categories as $key => $val) {
            $data['category'][$key]['id']  = $val->id;
            $data['category'][$key]['name']  = $val->name;
            $data['category'][$key]['slug']  = $val->slug;
            $subcategories = Category::where('parent_id', $val->id)->orderby('id', 'desc')->get();
            foreach ($subcategories as $k => $sval) {
                $data['category'][$key]['subcategory'][$k]['id']  = $sval->id; 
                $data['category'][$key]['subcategory'][$k]['name']  = $sval->name; 
                $data['category'][$key]['subcategory'][$k]['slug']  = $sval->slug; 
                $subsubcategories = Category::where('parent_id', $sval->id)->orderby('id', 'desc')->get();
                foreach ($subsubcategories as $y => $ssval) {
                    $data['category'][$key]['subcategory'][$k]['subsubcategory'][$y]['id']  = $ssval->id;
                    $data['category'][$key]['subcategory'][$k]['subsubcategory'][$y]['name']  = $ssval->name;
                    $data['category'][$key]['subcategory'][$k]['subsubcategory'][$y]['slug']  = $ssval->slug;
                }
            }
        }
        return $data;

    }
}
