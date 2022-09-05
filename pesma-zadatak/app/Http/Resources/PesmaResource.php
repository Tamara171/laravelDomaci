<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PesmaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public static $wrap = 'pesma';
    public function toArray($request)
    {
        return [
            'id' => $this->resource->id,
            'name' => $this->resource->name,
            'duration' => $this->resource->duration,
            'award' => $this->resource->award,
            'izvodjac' => new IzvodjacResource($this->resource->izvodjac),
            'album' => new AlbumResource($this->resource->album)

        ];
    }
}
