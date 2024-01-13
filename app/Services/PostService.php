<?php

namespace App\Services;

use App\DTO\PostQuery;
use App\Repositories\Post\PostRepositoryInterface;

class PostService
{
    protected PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPost()
    {
        return $this->postRepository->getAll();
    }

    public function getAllPostsPaginatedSorted(PostQuery $query)
    {
        return $this->postRepository->getAllPaginatedSorted($query);
    }
}
