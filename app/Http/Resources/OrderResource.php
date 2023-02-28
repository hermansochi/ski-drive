<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'ip' => $this->up,
            'user_agent' => $this->user_agent,
            'position' => $this->position,
            'phone' => sprintf("+7(%s)%s-%s-%s",
                substr($this->phone, 1, 3),
                substr($this->phone, 4, 3),
                substr($this->phone, 7, 2),
                substr($this->phone, 9, 2)
            ),
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
