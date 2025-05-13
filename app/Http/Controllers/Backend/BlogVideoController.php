<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogVideo;
use Illuminate\Http\Request;

class BlogVideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:list-video')->only('index');
        $this->middleware('can:create-video')->only('store','create');
        $this->middleware('can:edit-video')->only('update','edit');
        $this->middleware('can:delete-video')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $blogVideos = BlogVideo::query();
        if ($request->title) {
            $blogVideos = $blogVideos->where('title', 'like', '%' . $request->title . '%');
        }
        if ($request->description) {
            $blogVideos = $blogVideos->where('description', 'like', '%' . $request->description . '%');
        }
        $blogVideos = $blogVideos->latest()->paginate(20);
        return view('backend.pages.blog-video.index', compact('blogVideos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.blog-video.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'nullable',
        ]);

        $blogVideo= BlogVideo::create($validated);

        if($blogVideo){
            toast('Blog Video created successfully!','success');
            return redirect()->route('blog-videos.index');
        }else{
            toast('Something went wrong!','error');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogVideo $blogVideo)
    {
        return view('backend.pages.blog-video.edit',compact('blogVideo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogVideo $blogVideo)
    {
        $validated = $request->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'nullable',
        ]);

        $blogVideo->update($validated);

        if($blogVideo){
            toast('Blog Video updated successfully!','success');
            return redirect()->route('blog-videos.index');
        }else{
            toast('Something went wrong!','error');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogVideo $blogVideo)
    {
        $blogVideo->delete();
        toast('Blog Video deleted successfully!','success');
        return redirect()->route('blog-video.index');
    }
}
