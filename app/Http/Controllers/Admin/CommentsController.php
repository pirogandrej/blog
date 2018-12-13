<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Comment;

class CommentsController extends Controller
{
    public function index(){
        $comments = Comment::all();
        return view('admin.comments.index', ['comments' => $comments]);
    }
}
