<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     public function user()
    {
        return $this ->BelongsTo(User::class);
    }
}