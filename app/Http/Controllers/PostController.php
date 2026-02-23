<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdateePostRequest;
use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Factory|\Illuminate\Contracts\View\View
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request): RedirectResponse
    {

        Post::query()->create($request -> validated());
        return redirect('/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $posts): View
    {
        return view('posts.show', ['post' => $posts]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $posts): View
    {
        return view('posts.edit', ['post' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateePostRequest $request, Post $posts): RedirectResponse
    {

        $posts->update($request -> validated());
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $posts): RedirectResponse
    {
        $posts->delete();
        return redirect('/posts');
    }
}
