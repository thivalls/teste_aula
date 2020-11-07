<?php

namespace App\Tenant;

use App\Models\User;

trait TenantModels {
    protected static function boot() {
        parent::boot();

        static::addGlobalScope(new TenantScope());

        static::creating(function($model){
            /** @var User $tenant */
            $tenant = \Tenant::getTenant();
            if($tenant) {
                $model->user_id = $tenant->id;
            }
        });
    }
}
