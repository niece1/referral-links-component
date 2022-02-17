<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class HashObserver
{
    /**
     * Handle the model "created" event.
     *
     * @param  \Illuminate\Database\Eloquent\Model $model
     * @return void
     */
    public function created(Model $model)
    {
        $model->update([
            'hash_id' => config('app.nick_name') . '_' . $model->getHashNickName() . '_' . Hashids::encode($model->id),
        ]);
    }
}
