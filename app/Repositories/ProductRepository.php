<?php

namespace App\Repositories;

use App\Models\Product;
use App\Models\Category;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
/**
 * Class ProductRepository
 * @package App\Repositories
 * @version November 4, 2022, 1:54 pm UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'short_description',
        'image',
        'sub_category_id',
        'category_id'
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
        return Product::class;
    }
    public function getProducts($slug)
    {
        $categories = Category::where('slug', $slug)->first();
        $categoryId = $categories->id;
        $categoryName = $categories->name;
        $products = Product::where('cat_id', $categoryId)->orderby('id', 'desc')->get();
        foreach ($products as $key => $product) {
            $products[$key]['id']  = $product->id;
            $products[$key]['name']  = $product->name;
            $products[$key]['description']  = $product->detail;
            $products[$key]['productImg']  = 'http://localhost:8000/upload/product/'.$product->image;
            $products[$key]['category']  = $categoryName;
        }
        return $products;
    }
}
