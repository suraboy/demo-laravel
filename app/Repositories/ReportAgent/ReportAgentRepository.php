<?php

namespace App\Repositories\ReportAgent;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\ReportAgent;

/**
 * Class ReportAgentRepository
 * @package namespace App\Repositories;
 */
class ReportAgentRepository extends BaseRepository implements ReportAgentInterface
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ReportAgent::class;
    }
}

