<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlbumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap='album';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'name'=> $this->resource->name,
            'songs_number'=> $this->resource->songs_number,
            'duration'=> $this->resource->duration,
            'year'=> $this->resource->year
        ];
    }
}
