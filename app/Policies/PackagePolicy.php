<?php

namespace App\Policies;

use App\User;
use App\Package;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackagePolicy
{
    use HandlesAuthorization;

    /**
     * PackagePolicy constructor.
     */
    public function __construct()
    {
        //
    }

    /**
     * @param User $user
     * @param Package $package
     * @return bool
     */
    public function show(User $user, Package $package)
    {
        return $package->user_id == $user->id;
    }

    /**
     * @param User $user
     * @param Package $package
     * @return bool
     */
    public function update(User $user, Package $package)
    {
        return $package->user_id == $user->id;
    }

    /**
     * @param User $user
     * @param Package $package
     * @return bool
     */
    public function destroy(User $user, Package $package)
    {
        return $package->user_id == $user->id;
    }
}
