<?php

namespace App\Http\Controllers\User;

use App\DTO\PostQuery;
use App\Http\Controllers\Controller;
use App\Services\User\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected PostService $postService;

    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = new PostQuery(10);
        $posts = $this->postService->getAllPostsPaginatedSorted($query);

        dd($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo 'create';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        echo 'store';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 'show';
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        echo 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        echo 'update';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        echo 'destroy';
    }
}
