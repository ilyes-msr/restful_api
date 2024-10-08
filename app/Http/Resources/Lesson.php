<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Tag as TagResource;

class Lesson extends JsonResource
{

    public function toArray($request)
    {
        return [
            "Author" => $this->user->name,
            "Title" => $this->title,
            "Content" => $this->body,
            // "Tags" => TagResource::collection($this->tags)
        ];
    }
}
