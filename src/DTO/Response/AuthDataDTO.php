<?php

namespace Scaleplan\RocketChat\DTO\Response;

use Scaleplan\DTO\DTO;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class AuthDataDTO
 *
 * @package Scaleplan\RocketChat\DTO\Response
 */
final class AuthDataDTO extends DTO
{
    /**
     * @var string
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\NotBlank()
     */
    private $authToken;

    /**
     * @var string
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\NotBlank()
     */
    private $userId;

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }

    /**
     * @param string $authToken
     */
    public function setAuthToken($authToken) : void
    {
        $this->authToken = $authToken;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     */
    public function setUserId($userId) : void
    {
        $this->userId = $userId;
    }
}
