<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostLinks extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function links() {
        return $this->belongsTo(Post::class);
    }
}
