<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Repositories\ReportAgent\ReportAgentRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
/**
 * Class ReportAgentController
 * @package App\Http\Controllers\Web
 * @author mr.sirichai janpan (13_oy@hotmail.co.th)
 */
class ReportAgentController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $reportAgentRepository;

    /**
     * UserController constructor.
     * @param UserRepository $orderRepository
     */
    public function __construct(ReportAgentRepository $reportAgentRepository)
    {
        $this->reportAgentRepository = $reportAgentRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $response = $this->reportAgentRepository->paginate();
        return view('pages.report-agent.lists')->with('reports', $response);
    }
}
