<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title', 'content','deadline',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
