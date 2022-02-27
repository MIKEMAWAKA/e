<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @SWG\Definition(
 *      definition="Product",
 *      required={"name", "price", "regular_price", "sale_price"},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="name",
 *          description="name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="price",
 *          description="price",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="regular_price",
 *          description="regular_price",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="sale_price",
 *          description="sale_price",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="category_id",
 *          description="category_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="subcategory_id",
 *          description="subcategory_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="tag_id",
 *          description="tag_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="vendor_id",
 *          description="vendor_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="quantity",
 *          description="quantity",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="stock",
 *          description="stock",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="viewer",
 *          description="viewer",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="sku",
 *          description="sku",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="location",
 *          description="location",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="region",
 *          description="region",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="shortdescription",
 *          description="shortdescription",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="font_image",
 *          description="font_image",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="discount",
 *          description="discount",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="parent",
 *          description="parent",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="deleted_at",
 *          description="deleted_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
 */
class Product extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'products';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'price',
        'regular_price',
        'sale_price',
        'category_id',
        'subcategory_id',
        'tag_id',
        'vendor_id',
        'quantity',
        'stock',
        'viewer',
        'sku',
        'location',
        'region',
        'shortdescription',
        'font_image',
        'discount',
        'parent'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'price' => 'string',
        'regular_price' => 'string',
        'sale_price' => 'string',
        'category_id' => 'integer',
        'subcategory_id' => 'integer',
        'tag_id' => 'integer',
        'vendor_id' => 'integer',
        'quantity' => 'integer',
        'stock' => 'string',
        'viewer' => 'integer',
        'sku' => 'string',
        'location' => 'string',
        'region' => 'string',
        'shortdescription' => 'string',
        'font_image' => 'string',
        'discount' => 'string',
        'parent' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:191',
        'price' => 'required|string|max:191',
        'regular_price' => 'required|string|max:191',
        'sale_price' => 'required|string|max:191',
        'subcategory_id' => 'nullable|integer',
        'category_id' => 'nullable|integer',
        'tag_id' => 'nullable|integer',
        'vendor_id' => 'nullable|integer',
        'quantity' => 'nullable|integer',
        'stock' => 'nullable|string|max:191',
        'viewer' => 'nullable|integer',
        'sku' => 'nullable|string|max:191',
        'location' => 'nullable|string|max:191',
        'region' => 'nullable|string|max:191',
        'shortdescription' => 'nullable|string|max:191',
        'font_image' => 'nullable|string|max:191',
        'discount' => 'nullable|string|max:191',
        'parent' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'category_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function subcategory()
    {
        return $this->belongsTo(\App\Models\Subcategory::class, 'subcategory_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function tag()
    {
        return $this->belongsTo(\App\Models\Tag::class, 'tag_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function productimages()
    {
        return $this->hasMany(\App\Models\Productimage::class, 'product_id');
    }
}
