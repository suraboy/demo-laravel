<?php

namespace App\Repositories\Partner;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Partner;
use App\Validators\UserValidator;

/**
 * Class PartnerRepository
 * @package namespace App\Repositories\Partner;
 */
class PartnerRepository extends BaseRepository implements PartnerInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Partner::class;
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
