<?php

namespace App\Http\Resources;

use App\Models\Status;
use App\Models\VillainLevel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VillainResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'level' => new LevelResource(VillainLevel::find($this->level_id)),
            'status' => new StatusResource(Status::find($this->status_id)),
        ];
    }
}
