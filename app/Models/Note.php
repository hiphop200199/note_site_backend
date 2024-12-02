<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function note_tags()
    {
        return $this->hasMany(Note_tag::class);
    }
    public function note_images()
    {
        return $this->hasMany(Note_image::class);
    }
}
