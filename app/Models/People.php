<?php

namespace App\Models;

use App\Models\Grandparent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    use HasFactory;
    protected $fillable = ['grandparent_id','name', 'status', 'tanggal_lahir', 'keterangan', 'alamat'];

    public function grandparent()
    {
        return $this->belongsTo(Grandparent::class);
    }
}
