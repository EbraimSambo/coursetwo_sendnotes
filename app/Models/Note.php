<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'body',
        'title',
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function publisNote(User $user){
        return $this->where('user_id', $user)
                ->where('is_publish', true)
                ->get();
    }
}
