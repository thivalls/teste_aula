<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use App\Models\User;

class TenantScope implements Scope {
    public function apply(Builder $builder, Model $model) {
        /** @var User $tenant */
        $tenant = \Tenant::getTenant();
        if($tenant) {
            $builder->where('user_id', $tenant->id);
        }
    }
}
