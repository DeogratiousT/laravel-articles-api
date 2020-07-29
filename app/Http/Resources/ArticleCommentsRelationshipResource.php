<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\CommentIdentifierResource;
use Illuminate\Support\Collection;


class ArticleCommentsRelationshipResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $article = $this->additional['article'];

        return [
            'data'  => CommentIdentifierResource::collection($this->collection),
            'links' => [
                'self'    => route('articles.relationships.comments', ['article' => $article->id]),
                'related' => route('articles.comments', ['article' => $article->id]),
            ],
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('articles.index'),
            ],
        ];
    }
}
