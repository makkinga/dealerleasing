<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LegalForm extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * InsuranceApplication relationship
     *
     * @return HasMany
     */
    public function insuranceApplications(): HasMany
    {
        return $this->hasMany(InsuranceApplication::class);
    }
}
