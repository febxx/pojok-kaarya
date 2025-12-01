<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kreasi extends Model
{
    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
        'user_id',
        'tag_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }
}
