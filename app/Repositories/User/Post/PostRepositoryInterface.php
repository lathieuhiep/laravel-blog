<?php

namespace App\Repositories\User\Post;

use App\DTO\PostQuery;
use App\Repositories\BaseRepositoryInterface;

interface PostRepositoryInterface extends BaseRepositoryInterface
{
    public function getAllPaginatedSorted(PostQuery $query);
}
