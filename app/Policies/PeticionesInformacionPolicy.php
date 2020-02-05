<?php

namespace App\Policies;

use App\PeticionesInformacion;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PeticionesInformacionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any peticicones informacions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the peticicones informacion.
     *
     * @param  \App\User  $user
     * @param  \App\PeticiconesInformacion  $peticiconesInformacion
     * @return mixed
     */
    public function view(User $user, PeticionesInformacion $peticiconesInformacion)
    {
        //
    }

    /**
     * Determine whether the user can create peticicones informacions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the peticicones informacion.
     *
     * @param  \App\User  $user
     * @param  \App\PeticiconesInformacion  $peticiconesInformacion
     * @return mixed
     */
    public function update(User $user, PeticionesInformacion $peticiconesInformacion)
    {
        //
    }

    /**
     * Determine whether the user can delete the peticicones informacion.
     *
     * @param  \App\User  $user
     * @param  \App\PeticiconesInformacion  $peticiconesInformacion
     * @return mixed
     */
    public function delete(User $user, PeticionesInformacion $peticiconesInformacion)
    {
        //
    }

    /**
     * Determine whether the user can restore the peticicones informacion.
     *
     * @param  \App\User  $user
     * @param  \App\PeticiconesInformacion  $peticiconesInformacion
     * @return mixed
     */
    public function restore(User $user, PeticionesInformacion $peticiconesInformacion)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the peticicones informacion.
     *
     * @param  \App\User  $user
     * @param  \App\PeticiconesInformacion  $peticiconesInformacion
     * @return mixed
     */
    public function forceDelete(User $user, PeticionesInformacion $peticiconesInformacion)
    {
        //
    }
}
