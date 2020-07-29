<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\CommentsResource;
use App\Http\Resources\PeopleResource;

use App\Article;

class ArticleRelationshipController extends Controller
{
    public function author(Article $article)
    {
        return new PeopleResource($article->author);
    }

    public function comments(Article $article)
    {
        return new CommentsResource($article->comments);
    }
}
