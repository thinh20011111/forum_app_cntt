<?php

namespace App\Repositories\Report;

use App\Models\Report;
use App\Repositories\BaseRepository;

class ReportRepository extends BaseRepository implements ReportRepositoryInterface
{
    public function getModel()
    {
        return Report::class;
    }
}
