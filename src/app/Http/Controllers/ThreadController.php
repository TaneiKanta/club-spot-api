<?php

namespace App\Http\Controllers;

use App\Http\Resources\ThreadResource;
use App\Http\Resources\ThreadWithResponseResource;
use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $threads = Thread::with([
            'responses' => function ($query) {
                $query->latest()->limit(10);
            }
        ])
        ->withCount('responses')
        ->get();

        return ThreadWithResponseResource::collection($threads);
    }


    /**
     * @param Request $request
     * @return ThreadResource
     */
    public function store(Request $request)
    {
        $thread = Thread::create($request->only(
            ['title', 'name', 'email', 'content']
        ));

        return new ThreadResource($thread);
    }


    /**
     * @param int $id
     * @return ThreadWithResponseResource
     */
    public function show(int $id)
    {
        $thread = Thread::with('responses')->withCount('responses')->findOrFail($id);

        return new ThreadWithResponseResource($thread);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Thread $thread)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Thread $thread)
    {
        //
    }
}
