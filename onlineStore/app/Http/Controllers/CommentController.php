<?php

namespace App\Http\Controllers;
use App\Models\Comment;


use Illuminate\Http\Request;


//almacenar comentarios y aclificacion de un producto asociado a usuario
class CommentController extends Controller
{
    public function store(Request $request, $product_id)
    {

        Comment::create([
            'user_id' => auth()->user()->id,
            'product_id' => $product_id,
            'comment' =>  htmlspecialchars($request->input('comment')),
            'rating' => $request->input('rating'),
        ]);

        return back()->with('success', 'Comment added successfully!');
    }
}
