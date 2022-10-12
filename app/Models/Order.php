<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Order
 * @package App\Models
 * @version October 6, 2022, 12:14 pm UTC
 *
 * @property string $name
 * @property string $fname
 * @property string $lname
 * @property string $phone
 * @property string $address
 * @property string $location
 * @property string $city
 * @property string $productname
 * @property string $itemprice
 * @property string $totalprice
 * @property string $product_id
 * @property string $user_id
 */
class Order extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'orders';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'fname',
        'lname',
        'phone',
        'address',
        'location',
        'city',
        'productname',
        'itemprice',
        'totalprice',
        'product_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'fname' => 'string',
        'lname' => 'string',
        'phone' => 'string',
        'address' => 'string',
        'location' => 'string',
        'city' => 'string',
        'productname' => 'string',
        'itemprice' => 'string',
        'totalprice' => 'string',
        'product_id' => 'string',
        'user_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'name' => 'required|string|max:191',
        // 'fname' => 'required|string|max:191',
        // 'lname' => 'required|string|max:191',
        // 'phone' => 'required|string|max:191',
        // 'address' => 'required|string|max:191',
        // 'location' => 'required|string|max:191',
        // 'city' => 'required|string|max:191',
        // 'productname' => 'required|string|max:191',
        // 'itemprice' => 'required|string|max:191',
        // 'totalprice' => 'required|string|max:191',
        // 'product_id' => 'required|string|max:191',
        // 'user_id' => 'required|string|max:191',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];


}
