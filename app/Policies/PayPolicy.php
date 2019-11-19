<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PayPolicy
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
      if($user->rol == 'manager' || $user->rol == 'employee')
      {
        $dato= true;
      }
      else{
        $dato= false;
      }

      return $dato;
    }
}
