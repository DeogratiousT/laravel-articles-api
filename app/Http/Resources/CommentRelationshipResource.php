<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\AuthorIdentifierResource;

class CommentRelationshipResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     *
     * @return array
     */
    public function toArray($request)
    {
        return [
            'author'   => [
                'data'  => new AuthorIdentifierResource($this->author),
            ],
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('comments.index'),
            ],
        ];
    }
}
