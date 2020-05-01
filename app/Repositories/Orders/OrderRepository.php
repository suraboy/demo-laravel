<?php

namespace App\Repositories\Orders;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Order;

/**
 * Class OrderRepository
 * @package namespace App\Repositories;
 */
class OrderRepository extends BaseRepository implements OrderInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Order::class;
    }

    public function findByEmail($email){
        return $this->model->where('email',$email)->get();
    }

    public function create(array $request){
        self::bcryptPassword($request);
        return $this->model->create($request);
    }

    private function bcryptPassword(&$request)
    {
        if (!empty($request['password'])) {
            $request['password'] = bcrypt($request['password']);
        }
    }
}

