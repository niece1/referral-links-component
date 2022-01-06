<?php

namespace App\Traits;

use App\Observers\HashObserver;
use Illuminate\Support\Str;
use ReflectionClass;

/**
 *
 * @author test
 */
trait HasHashes
{
    /**
     * Method should be named as trait name.
     * A way to transfer logic from model in order not to be bind to concrete one.
     * 
     * return void
     */
    public static function bootHasHashes()
    {
        static::observe(new HashObserver());
        static::creating(function ($model) {
            $model->fillable(array_merge($model->fillable, ['hash_id']));
        });
    }
    
    public function getHashNickName()
    {
        return strtolower(Str::limit((new ReflectionClass($this))->getShortName(), 4, ''));
    }
    
    public function getRouteKeyName()
    {
        return 'hash_id';
    }
    
    public function getId()
    {
        return $this->hash_id;
    }
}
