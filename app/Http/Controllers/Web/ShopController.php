<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\Shop\ShopRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/**
 * Class ShopController
 * @package App\Http\Controllers\Web
 */
class ShopController extends Controller
{
    /**
     * @var ShopRepository
     */
    protected $shopRepository;

    /**
     * UserController constructor.
     * @param ShopRepository $shopRepository
     */
    public function __construct(ShopRepository $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    public function show(Request $request)
    {
        $id = auth::user()->id;
//        $response = $this->shopRepository->find($id);
//        return view('pages.shops.info')->with('shops', $response);
        return view('pages.shops.info');
    }
}
