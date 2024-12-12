<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chat extends Model
{
    use HasFactory;

    protected $fillable = [
        "chat_room_id",
        "content",
        "is_generated"
    ];

    public function chatRoom():BelongsTo{
        return $this->belongsTo(ChatRoom::class);
    }
}
