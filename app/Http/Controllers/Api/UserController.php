<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\PartnerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
/**
 * Class UserController
 * @package App\Http\Controllers\Web
 */
class UserController extends Controller
{
    /**
     * @var PartnerRepository
     */
    protected $userRepository;

    /**
     * UserController constructor.
     * @param PartnerRepository $userRepository
     */
    public function __construct(PartnerRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function checkemail(Request $request)
    {
        $user = $this->userRepository->findByEmail($request->email);
        return response()->json($user, 200);
    }
}
