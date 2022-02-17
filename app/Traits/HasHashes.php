<?php

namespace App\Traits;

use App\Observers\HashObserver;
use Illuminate\Support\Str;
use ReflectionClass;

trait HasHashes
{
    /**
     * A way to transfer logic from model in order not to be bind to concrete one.
     *
     * @return void
     */
    public static function bootHasHashes()
    {
        static::observe(new HashObserver());
        static::creating(function ($model) {
            $model->fillable(array_merge($model->fillable, ['hash_id']));
        });
    }

    /**
     * Get a hash name.
     *
     * @return string
     */
    public function getHashNickName()
    {
        return strtolower(Str::limit((new ReflectionClass($this))->getShortName(), 4, ''));
    }

    /**
     * Get a route key name.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'hash_id';
    }

    /**
     * Get model's hash id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->hash_id;
    }
}
