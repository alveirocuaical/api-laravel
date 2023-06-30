<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //es el formato de respuesta del api
        return [
            'title1' => $this->title,
            'slug' => $this->slug,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'faturas' => [
                'items' => ['sku'],
            ]

        ];
    }
}
