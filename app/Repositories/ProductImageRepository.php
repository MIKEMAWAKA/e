<?php

namespace App\Repositories;

use App\Models\ProductImage;
use App\Repositories\BaseRepository;

/**
 * Class ProductImageRepository
 * @package App\Repositories
 * @version December 29, 2020, 8:26 am UTC
*/

class ProductImageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'product_id'
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
        return ProductImage::class;
    }
}
