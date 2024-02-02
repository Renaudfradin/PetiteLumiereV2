<?php

namespace App\Policies;

use App\Models\Legends;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class LegendsPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Legends $legends): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, Legends $legends): bool
    {
        return true;
    }

    public function delete(User $user, Legends $legends): bool
    {
        return true;
    }

    public function restore(User $user, Legends $legends): bool
    {
        return true;
    }

    public function forceDelete(User $user, Legends $legends): bool
    {
        return true;
    }
}
