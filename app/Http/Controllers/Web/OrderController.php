<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\Orders\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * Class OrderController
 * @package App\Http\Controllers\Web
 * @author mr.sirichai janpan (13_oy@hotmail.co.th)
 */
class OrderController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $orderRepository;

    /**
     * UserController constructor.
     * @param UserRepository $orderRepository
     */
    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $response = $this->orderRepository->paginate();
        return view('pages.orders.lists')->with('orders', $response);
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
        $response = $this->orderRepository->create($request->all());
        return back()->with('alert-success','Create User Successfully.');
    }

    public function show(Request $request, $id)
    {
        $response = $this->orderRepository->find($id);
        return view('pages.users.edit')->with('users', $response);
    }

    public function update(Request $request)
    {
        $params = collect($request->all())->filter(function ($value, $key) {
            return $value != null;
        });

        $response = $this->orderRepository->update($params->all(),$request->id);

        return back()->with(['alert-success'=>'Update User Successfully.','users'=>$response]);
    }

    public function destroy(Request $request)
    {
        $request->merge(['status'=>'ban','deleted_at'=>now()]);
        $this->orderRepository->update($request->all(),$request->id);
        return redirect()->route('users.index')->with('alert-success','Delete User Successfully.');
    }
}
