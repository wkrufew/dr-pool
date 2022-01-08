<?php

namespace App\Policies;

use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function valued(User $user, Service $service)
    {
        if(Review::where('user_id', $user->id)->where('service_id', $service->id)->count() ){
            return false;
        }else{
            return true;
        }
    }
}
