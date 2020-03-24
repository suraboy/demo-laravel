<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
/**
 * Class UserController
 * @package App\Http\Controllers\Web
 */
class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UserController constructor.
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $response = $this->userRepository->paginate();
        return view('pages.users.lists')->with('users', $response);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('pages.users.create');
    }

    public function show(Request $request,$id)
    {
        return view('pages.users.create');
    }

    public function destroy(Request $request)
    {
        $this->userRepository->delete($request->id);
        return back();
    }
}
