<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\BaseRepository;

/**
 * Class ProductRepository
 * @package App\Repositories
 * @version December 29, 2020, 8:26 am UTC
*/

class ProductRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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

    
}
