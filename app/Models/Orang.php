<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orang extends Model
{
    use HasFactory;

    protected $table = 'orang';
    protected $fillable = ['grandparent_id','nama', 'status','tanggal_lahir', 'keterangan','alamat'];

    public function grandparent()
    {
        return $this->belongsTo(Grandparent::class);
    }

}
