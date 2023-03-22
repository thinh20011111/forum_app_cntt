<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialized extends Model
{
    use HasFactory;

    public function subject_()
    {
        return $this->belongsTo(Subject::class,'speclized_id','id');
    }
}
