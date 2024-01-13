<?php

namespace App\DTO;

class PostQuery
{
    public int $perPage;
    public string $sortBy;
    public string $sortDirection;
    public array $selectedColumns;

    public function __construct(
        $perPage = 10,
        $sortBy = 'id',
        $sortDirection = 'desc',
        $selectedColumns = ['id', 'title', 'slug', 'content', 'excerpt', 'status', 'created_at'])
    {
        $this->perPage = $perPage;
        $this->sortBy = $sortBy;
        $this->sortDirection = $sortDirection;
        $this->selectedColumns = $selectedColumns;
    }
}
