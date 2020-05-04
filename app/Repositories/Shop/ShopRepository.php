<?php

namespace App\Repositories\Shop;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Package;

/**
 * Class ShopRepository
 * @package namespace App\Repositories;
 */
class ShopRepository extends BaseRepository implements ShopInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Package::class;
    }
}

