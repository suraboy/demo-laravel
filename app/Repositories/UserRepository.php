<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Interfaces\UserInterface;
use App\Models\User;
use App\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class UserRepository extends BaseRepository implements UserInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
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
