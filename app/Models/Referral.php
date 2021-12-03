<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Builder;

class Referral extends Model
{
    use HasFactory;
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'completed_at'
    ];
    
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        static::creating(function (Referral $referral) {
            $referral->token = Str::random(50);
        });
    }
    

    public function scopeWhereNotCompleted(Builder $builder)
    {
        return $builder->where('completed', false);
    }
    

    public function scopeWhereNotFromUser(Builder $builder, ?User $user)
    {
        if(!$user) {
            return $builder;
        }
        return $builder->where('user_id', '!=', $user->id);
    }
    
    public function complete()
    {
        $this->update([
            'completed' => true,
            'completed_at' => now()
        ]);
    }
}
