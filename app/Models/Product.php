<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Product extends Model
{
    use HasFactory;
  
    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $fillable = [
        'name', 'detail','cat_id','sub_cat_id','image'
    ];
    public function category()
    {
        return $this->hasOne(\App\Models\Category::class,'id', 'cat_id');
    }
    public function subcategoryZ()
    {
        return $this->hasOne(\App\Models\Category::class,'parent_id', 'cat_id');
    }

}