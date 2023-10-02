<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'task_id'=>$this->id,
            'task_title'=>$this->title,
            'task_description'=>$this->description,
            'user_id'=>$this->user_id,
            'task_created_at'=>$this->created_at,
            'task_updated_at'=>$this->updated_at,
            'author'=> $this->whenLoaded('author', function(){
                return new UserResource($this->author);
            })
        ];
    }
}
