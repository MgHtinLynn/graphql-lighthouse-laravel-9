<?php

namespace App\GraphQL\Mutations;

use App\Models\User;
use Arr;

final class CustomMutation
{
    /**
     * @param $root
     * @param array{} $args
     * @return User
     */
    public function resolve($root, array $args)
    {
        $user = Arr::only($args, ['email', 'name']);

        return User::where('email', '=', $user['email'])->first();
    }
}
