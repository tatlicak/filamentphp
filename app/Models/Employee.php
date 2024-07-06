<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function country():BelongsTo
    {
        return $this->BelongsTo(Country::class);
    }

    public function state():BelongsTo
    {
        return $this->BelongsTo(State::class);
    }

    public function city():BelongsTo
    {
        return $this->BelongsTo(City::class);
    }

    public function department():BelongsTo
    {
        return $this->BelongsTo(Department::class);
    }
}
