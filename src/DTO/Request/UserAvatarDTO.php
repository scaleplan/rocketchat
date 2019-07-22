<?php

namespace Scaleplan\RocketChat\DTO\Request;

use Scaleplan\DTO\DTO;
use Scaleplan\RocketChat\Traits\DTO\UserIdDTOTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class UserAvatarDTO
 *
 * @package Scaleplan\RocketChat\DTO\Request
 */
class UserAvatarDTO extends DTO
{
    use UserIdDTOTrait;

    /**
     * @var string
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\NotBlank()
     */
    private $avatarUrl;
}
