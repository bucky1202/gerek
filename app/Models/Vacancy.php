<?php

namespace App\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vacancy extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'description',
        'company',
        'image',
        'salary',
        'type',
        'place',
        'status',
        'opening_time',
        'closing_time',
    ];

    protected $dates = ['opening_time', 'closing_time'];

    // Define the relationship with the User model
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function profile(): BelongsTo
    {
        return $this->belongsTo(Profile::class);
    }

    // Scope to automatically update status based on closing time
    public static function boot()
    {
        parent::boot();

        static::saving(function ($vacancy) {
            if ($vacancy->closing_time && $vacancy->closing_time <= now()) {
                $vacancy->status = 'closed';
            }
        });
    }
}
