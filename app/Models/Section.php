<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Section extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }
}
