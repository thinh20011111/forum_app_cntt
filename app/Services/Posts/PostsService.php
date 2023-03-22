<?php

namespace App\Services\Posts;

use App\Repositories\Posts\PostsRepositoryInterface;
use App\Services\BaseService;

class PostsService extends BaseService implements PostsServiceInterface
{
    public $repository;

    public function __construct(PostsRepositoryInterface $PostsRepository)
    {
        $this->repository = $PostsRepository;
    }

    public function getPostsOnIndex($request)
    {
        return $this->repository->getPostsOnIndex($request);
    }


}
