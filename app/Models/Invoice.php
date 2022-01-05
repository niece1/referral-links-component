<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Invoice extends Model
{
    use HasFactory;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['hash_id'];
    
    public static function boot()
    {
        parent::boot();
        
        static::created(function ($invoice) {
            $invoice->update([
                'hash_id' => Hashids::encode($invoice->id),
            ]);
        });
    }
}
