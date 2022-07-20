<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class KaryawanPolicy
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
    public function delete(User $user)
    {
        return ($user->sebagai == 'manajer'
            ? Response::allow()
            : Response::deny('Maaf, akses khusus manajer'));
    }

    public function edit(User $user)
    {
        return ($user->sebagai == 'manajer'
            ? Response::allow()
            : Response::deny('Maaf, akses khusus manajer'));
    }
    public function view(User $user)
    {
        return ($user->sebagai == 'manajer'
            ? Response::allow()
            : Response::deny('Maaf, akses khusus manajer'));
    }
}
