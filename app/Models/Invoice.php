<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasHashes;

class Invoice extends Model
{
    use HasFactory;
    use HasHashes;

    /**
     * Get books associated with specified invoice.
     */
    public function books()
    {
        return $this->hasMany(Book::class, 'invoice_id', 'hash_id');
    }
}
