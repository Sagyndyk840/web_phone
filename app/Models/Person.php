<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Person extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function subscriptions (): \Illuminate\Database\Eloquent\Relations\MorphMany
    {
        return $this->morphMany(Subscription::class, 'typeable');
    }

    public function getShortNameAttribute (): string
    {
        if ($this->patronymic) {
            return $this->surname . ' ' . Str::limit($this->name, 1, '') . '. ' . Str::limit($this->patronymic, 1, '') . '.';
        }

        return $this->surname . ' ' . Str::limit($this->name, 1, '') . '.';
    }

    public function getFullNameAttribute (): string
    {
        if ($this->patronymic) {
            return $this->surname . ' ' . $this->name . ' ' . $this->patronymic;
        }

        return $this->surname . ' ' . $this->name;
    }
}
