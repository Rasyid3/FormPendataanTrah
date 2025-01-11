<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrangResource extends JsonResource
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
            'grandparent_id' => $this->grandparent_id,
            'nama' => $this->nama,
            'status' => $this->status,
            'tanggal_lahir' => $this->tanggal_lahir,
            'keterangan' => $this->keterangan,
            'alamat' => $this->alamat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
