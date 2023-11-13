<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    use HasFactory;

    // protected $fillable = ['tittle', 'excerpt', 'body'];
    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(category::class);
    }
}


