<?php

namespace App\Models;

use App\Models\Purchase;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
     * 
     */
    public function purchases()
    {
        return $this->hasMany(Purchase::class, 'customer_id', 'id');
    }
}
