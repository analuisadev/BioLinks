<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Link;
use App\Models\User;

class LinkPolicy
{
    public function update(User $user, Link $link) {
        return $link->user->is($user) ? Response::allow() : Response::deny('Você não está autorizado a realizar essa ação.');
    }
}
