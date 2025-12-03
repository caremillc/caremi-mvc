<?php
namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Careminate\Http\Requests\Request;
use Careminate\Http\Requests\FileRequest;
use Careminate\Http\Traits\FileUploadTrait;

class PostController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return view('posts.index');
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $file = FileRequest::file('image');
        $file->getOriginalName(); // original file name
        $file->extension();       // file extension
        $file->size();            // file size in bytes
        $file->mime();            // MIME type
        $file->tmp();             // temporary upload path
        dd($file);
        dd(Request::all());
        // try {
        //     $image = $this->uploadImage('image', [
        //         'disk' => 'public',
        //         'path' => 'images/posts',
        //         'resize' => [1200, 800],
        //         'validate' => [
        //             'max' => 5120,
        //             'mimes' => ['image/jpeg','image/png','image/webp'],
        //             'extensions' => ['jpg','jpeg','png','webp']
        //         ]
        //     ]);

        //     Post::create([
        //         'title' => request('title'),
        //         'body'  => request('body'),
        //         'image' => $image?->storePath(),
        //     ]);

        //     return redirect('/posts')->with('success', 'Post created.');

        // } catch (\Exception $e) {
        //     return back()->withErrors($e->getMessage());
        // }
    }
}
