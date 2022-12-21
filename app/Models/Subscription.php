<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function typeable (): \Illuminate\Database\Eloquent\Relations\MorphTo
    {
        return $this->morphTo('typeable');
    }



}
