<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class $SCHEMA_FILE
 * @package App\Models
 * @version November 4, 2022, 6:57 am UTC
 *
 */
class $SCHEMA_FILE extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = '$_s_c_h_e_m_a__f_i_l_e_s';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
