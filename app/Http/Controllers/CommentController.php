<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class CommentController extends Controller
{
    // Menampilkan semua komentar berdasarkan post_id
    public function index(Post $post)
    {
        // Mengambil komentar berdasarkan post yang diakses
        $comments = $post->comments;
        return view('comments.index', compact('comments'));
    }
    // Simpan komentar baru
    public function store(Request $request, $postId)
    {
        $request->validate([
            'author' => 'required',
            'content' => 'required',
        ]);

        $comment = new Comment();
        $comment->post_id = $postId;
        $comment->author = $request->author;
        $comment->content = $request->content;
        $comment->save();

        return redirect()->route('comments.index', $postId)
                         ->with('success', 'Comment added successfully.');
    }
}