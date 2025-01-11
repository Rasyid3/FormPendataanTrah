<?php

namespace App\Models;

use App\Models\People;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grandparent extends Model
{
    use HasFactory;
    protected $fillable = ['name','asal', 'tanggal_lahir'];

    public function people()
    {
        return $this->hasMany(People::class);
    }
}
