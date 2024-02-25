<?php

namespace Class;

class User
{
    public function __construct(public string $username,public string$password)
    {
    }
    public function isVerified():bool
    {
        return false;
    }
    public function __toString(): string
    {
        return "Login :".strtoupper($this->username)."\n"." Password".str_rot13($this->password);
    }

}