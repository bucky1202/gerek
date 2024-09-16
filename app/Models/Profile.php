<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'fullname',
        'date_of_birth',
        'address',
        'avatar',
        'job_title',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
