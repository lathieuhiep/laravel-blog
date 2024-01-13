<?php

namespace App\Repositories\Post;

use App\DTO\PostQuery;
use App\Models\Post;
use App\Repositories\BaseRepository;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function __construct(Post $post)
    {
        parent::__construct($post);
    }

    public function getAllPaginatedSorted(PostQuery $query)
    {
        return $this->model->select($query->selectedColumns)
            ->orderBy($query->sortBy, $query->sortDirection)
            ->paginate($query->perPage);
    }
}
