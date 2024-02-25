<?php

namespace Class;


class Login
{
    public function __construct(protected User $user)
    {
    }
    public function login(): bool
    {
        if (!$this->user->isVerified()) {
            throw new UserNotVerifiedException("Utilisateur non vérifié");
        }
        return true;
    }

}