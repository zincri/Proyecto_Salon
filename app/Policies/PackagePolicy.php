<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PackagePolicy
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
    public function pass(User $user)
    {
      if($user->rol == 'manager')
      {
        $dato= true;
      }
      else{
        $dato= false;
      }

      return true;
    }
}
