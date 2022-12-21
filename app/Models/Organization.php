<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function subscriptions (): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Subscription::class, 'typeable');
    }
}
