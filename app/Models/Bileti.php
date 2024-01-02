<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bileti extends Model
{
    use HasFactory;
    
    protected $fillable = ['ticket'];

    public function teaterperformance()
    {
        return $this->belongsTo(Teaterperformance::class);
    }
}
