<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Models\PostLinks;
use App\Models\PostTags;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('category', 'region', 'links', 'tags')->orderBy('id', 'DESC')->get();

        return response()->json([
            'success' => true,
            'data' => $posts,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'content' => 'required|string|max:255',
            'category_id' => 'required',
        ]);

        try {
            $post = new Post;
            $post->content = $data['content'];
            $post->category_id = $data['category_id'];
            if ($request->has('region_id')) {
                $post->region_id = $data['region_id'];
            } else {
                $post->region_id = NULL;
            }
            $post->save();

            if ($request->has('links')) { //links
                foreach ($data['links'] as $linkData) {
                    $link = new PostLinks;
                    $link->name = $linkData['name'];
                    $link->url = $linkData['url'];
                    $link->post_id = $post->id;
                    $link->save();
                }
            }
            
            if ($request->has('tags')) {
                foreach ($data['tags'] as $tagData) {
                    $tag = new PostTags;
                    $tag->tag = $tagData['name'];
                    $tag->post_id = $post->id;
                    $tag->save();
                }
            }

            return response()->json(['message' => 'Noticia creada con exito', 'data' => $post])->setStatusCode(200);

        } catch (\Exception $e) {
            return response()->json(['message' => $e->getMessage()])->setStatusCode(500);
        }

        
    }

    public function show(Post $post)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Noticia no encontrada.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $post,
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Noticia no encontrada.',
            ], 404);
        }

        $post->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $post,
        ]);
    }

    public function destroy(Post $post)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'success' => false,
                'message' => 'Noticia no encontrada.',
            ], 404);
        }

        $post->delete();

        return response()->json([
            'success' => true,
            'message' => 'Noticia eliminada con exito',
        ]);
    }
}
