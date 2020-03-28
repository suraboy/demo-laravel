<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
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
        $response = $this->userRepository->where('status','active')->paginate();
        return view('pages.users.lists')->with('users', $response);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('pages.users.create');
    }

    public function insert(Request $request)
    {
        $response = $this->userRepository->create($request->all());
        return back()->with('alert-success','Create User Successfully.');
    }

    public function show(Request $request, $id)
    {
        $response = $this->userRepository->find($id);
        return view('pages.users.edit')->with('users', $response);
    }

    public function update(Request $request)
    {
        $params = collect($request->all())->filter(function ($value, $key) {
            return $value != null;
        });

        $response = $this->userRepository->update($params->all(),$request->id);

        return back()->with(['alert-success'=>'Update User Successfully.','users'=>$response]);
    }

    public function destroy(Request $request)
    {
        $request->merge(['status'=>'ban','deleted_at'=>now()]);
        $this->userRepository->update($request->all(),$request->id);
        return redirect()->route('users.index')->with('alert-success','Delete User Successfully.');
    }
}
