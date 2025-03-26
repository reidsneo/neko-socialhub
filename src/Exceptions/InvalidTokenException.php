<?php

namespace Neko\Socialhub\Exceptions;



class InvalidTokenException extends Exception
{
    public string $token;

    #[Pure]
    public function __construct(string $message, string $token)
    {
        parent::__construct($message, -1);

        $this->token = $token;
    }
}
