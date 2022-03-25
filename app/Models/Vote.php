<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function candidates(): BelongsTo
    {
        return $this->belongsTo(User::class, 'candidate_id');
    }

    public function voter()
    {
        return $this->belongsTo(User::class, 'voter_id');
    }
}