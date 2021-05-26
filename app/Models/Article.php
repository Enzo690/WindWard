<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =   [
        "title",
        "content",
        "slug",
        "image",
        'author_id'
    ];

    /**
     * 1:n relation
     */

    public function author()
    {
        return $this->belongsTo(User::class);
    }

}
