<?php

namespace App\Policies;

use App\Models\series;
use App\Models\User;

class SeriesPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, series $series): bool
    {
        return true;
    }

    public function create(User $user): bool
    {
        return true;
    }

    public function update(User $user, series $series): bool
    {
        return true;
    }

    public function delete(User $user, series $series): bool
    {
        return true;
    }

    public function restore(User $user, series $series): bool
    {
        return true;
    }

    public function forceDelete(User $user, series $series): bool
    {
        return true;
    }
}
