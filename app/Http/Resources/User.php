<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Lesson as LessonResource;

class User extends JsonResource
{
    public function toArray($request)
    {
        return [
            'Full Name' => $this->name,
            'E-Mail' => $this->email,
            'Lessons' => LessonResource::collection($this->lessons),
        ];
    }
}
