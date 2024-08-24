<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function edit(User $user ,Job $job): bool
    {
        return $job->employer->user->is($user);
    }

}
