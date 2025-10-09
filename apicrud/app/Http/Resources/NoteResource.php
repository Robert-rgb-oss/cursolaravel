<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{

    public function toArray(Request $request):  

    {
        return[
            'id'=> $this->id,
            'title'=> $'Title' . $this->title,
            'description'=> $this->description,
            'example' => 'This is an example.'
        ];
    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
