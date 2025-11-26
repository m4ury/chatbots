<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chatbot extends Model
{
    /** @use HasFactory<\Database\Factories\ChatbotFactory> */
    use HasFactory;
    use HasUuids;

    /* protected $fillable = [
        'name',
        'description',
        'user_id',
        'system_prompt',
        'model',
        'temperature',
    ]; */

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function knowledgeSources(): hasMany
    {
        return $this->hasMany(KnowledgeSource::class);
    }

    public function chats(): hasMany
    {
        return $this->hasMany(Chat::class);
    }
}
