<?php

namespace Scaleplan\RocketChat\Traits\DTO;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Trait UserIdDTOTrait
 *
 * @package Scaleplan\RocketChat\Traits\DTO
 */
trait UserIdDTOTrait
{
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
