<?php

namespace App\Repositories\Posts;

use App\Repositories\RepositoryInterface;

interface PostsRepositoryInterface extends RepositoryInterface
{
    public function getPostsOnIndex($request);
}
