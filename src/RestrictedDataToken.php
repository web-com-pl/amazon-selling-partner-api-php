<?php

namespace Webcom\Amazon\Rest;

/**
 * Class RestrictedDataToken
 * @author Łukasz Wątor
 */
class RestrictedDataToken
{
    /**
     * The token
     *
     * @var string
     */
    private string $token;
    /**
     * Number of seconds after which the token expires
     *
     * @var int
     */
    private int $expiresIn;
    /**
     * Unix time when token expires
     *
     * @var int
     */
    private int $expiresTime;

    /**
     * @param string $token
     * @param int $expiresIn
     */
    public function __construct(string $token, int $expiresIn)
    {
        $this->token = $token;
        $this->expiresIn = $expiresIn;
        $this->expiresTime = time() + $expiresIn;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return int
     */
    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    /**
     * @return bool
     */
    public function isTokenExpired(): bool
    {
        return time() >= $this->expiresTime;
    }

}
