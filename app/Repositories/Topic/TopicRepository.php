<?php

namespace App\Repositories\Topic;

use App\Models\Topic;
use App\Repositories\BaseRepository;

class TopicRepository extends BaseRepository implements TopicRepositoryInterface
{
  public function getModel()
  {
    return Topic::class;
  }

}
