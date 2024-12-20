<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{

    public function edit(User $user, job $job): bool
    {
        return $job->employer->user->is($user);
    }

}
