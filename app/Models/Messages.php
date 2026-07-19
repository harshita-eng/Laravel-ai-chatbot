<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Messages extends Model
{
    protected $fillable = [
        'conversation_id',
        'role',
        'message'
    ];

    /**
     * A message belongs to one conversation.
    */
    public function conversation(): BelongTo {

        return $this->belongsTo(conversations::class);
    }
}
