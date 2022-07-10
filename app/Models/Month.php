<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function fertilizer(){
        return $this->hasMany(Fertilizer::class);
    }
}