<?php

namespace App\Observers;

use App\Models\Log;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class ModelObserver
{
    public function updating(Model $model)
    {

        Log::create([
            'user_id' => Auth::id(),
            'action' => 'update',
            'model' => get_class($model),
            'model_id' => $model->id,
            'old_values' => json_encode($model->getOriginal()),
            'new_values' => json_encode($model->getDirty()),
            'company_id' => Auth::user()->company_id,
        ]);
    }

    public function created(Model $model)
    {
        Log::create([
            'user_id' => Auth::id(),
            'action' => 'create',
            'model' => get_class($model),
            'model_id' => $model->id,
            'old_values' => null,
            'new_values' => json_encode($model->toArray()),
            'company_id' => Auth::user()->company_id,
        ]);
    }

    public function deleting(Model $model)
    {
        Log::create([
            'user_id' => Auth::id(),
            'action' => 'delete',
            'model' => get_class($model),
            'model_id' => $model->id,
            'old_values' => json_encode($model->toArray()),
            'new_values' => null,
            'company_id' => Auth::user()->company_id,
        ]);
    }
}
