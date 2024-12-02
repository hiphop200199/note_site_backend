<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note_image extends Model
{
    protected $guarded = [];
    public function notes()
    {
        return $this->belongsTo(Note::class);
    }
}
