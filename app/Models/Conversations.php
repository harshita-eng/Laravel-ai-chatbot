<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Conversations extends Model
{
    protected $fillable = [
        'user_id',
        'title'
    ];

    /**
     * A conversation belongs to one user.
    */
    public function user(): BelongsTo {

        return $this->belongsTo(User::class);
    }

    /**
     * A conversation has many messages.
    */
    public function messages(): HasMany {

        return $this->HasMany(Message::class);
    }
}
