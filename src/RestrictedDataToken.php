<?php
/**
 * All Rights Reserved
 * @copyright Copyright (C) 2022 Apilo.com
 */

namespace Webcom\Amazon\Rest;

use Webcom\Amazon\Rest\TokensApi20210301\Model\CreateRestrictedDataTokenResponse20210301;

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
     * @param CreateRestrictedDataTokenResponse20210301 $createRestrictedDataTokenResponse20210301
     * @return RestrictedDataToken
     */
    public static function create(CreateRestrictedDataTokenResponse20210301 $createRestrictedDataTokenResponse20210301)
    {
        return new self($createRestrictedDataTokenResponse20210301->getRestrictedDataToken(), $createRestrictedDataTokenResponse20210301->getExpiresIn());
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
