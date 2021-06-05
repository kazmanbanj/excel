<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
    ];

    /**
     * Get all of the purchases for the Customer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    // public function purchases(): HasMany
    // {
    //     return $this->hasMany(Purchases::class, 'customer_id', 'id');
    // }
}
