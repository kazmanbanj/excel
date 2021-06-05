<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'bank_acc_number',
        'company'
    ];

    /**
     * Get all of the customers for the Purchase
     *
     */
    public function customer()
    {
        return $this->BelongsTo(Customer::class);
    }
}
