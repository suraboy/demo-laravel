<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\Partner\PartnerRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * Class PartnerController
 * @package App\Http\Controllers\Web
 */
class PartnerController extends Controller
{
    /**
     * @var PartnerRepository
     */
    protected $partnerRepository;

    /**
     * UserController constructor.
     * @param PartnerRepository $partnerRepository
     */
    public function __construct(PartnerRepository $partnerRepository)
    {
        $this->partnerRepository = $partnerRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $response = $this->partnerRepository->where('status','active')->paginate();
        return view('pages.partners.lists')->with('partners', $response);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('pages.partners.create');
    }

    public function insert(Request $request)
    {
        $response = $this->partnerRepository->create($request->all());
        return back()->with('alert-success','Create User Successfully.');
    }

    public function show(Request $request, $id)
    {
        $response = $this->partnerRepository->find($id);
        return view('pages.partners.edit')->with('partners', $response);
    }

    public function update(Request $request)
    {
        $params = collect($request->all())->filter(function ($value, $key) {
            return $value != null;
        });

        $response = $this->partnerRepository->update($params->all(),$request->id);

        return back()->with(['alert-success'=>'Update User Successfully.','partners'=>$response]);
    }

    public function destroy(Request $request)
    {
        $request->merge(['status'=>'ban','deleted_at'=>now()]);
        $this->partnerRepository->update($request->all(),$request->id);
        return redirect()->route('partners.index')->with('alert-success','Delete User Successfully.');
    }
}
