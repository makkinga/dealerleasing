<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InsuranceApplication extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    /**
     * LegalForm relationship
     *
     * @return BelongsTo
     */
    public function legalForm(): BelongsTo
    {
        return $this->belongsTo(LegalForm::class);
    }
}
