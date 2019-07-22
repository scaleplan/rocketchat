<?php

namespace Scaleplan\RocketChat\DTO\Response;

use Scaleplan\DTO\DTO;
use Scaleplan\RocketChat\Traits\DTO\SuccessDTOTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class UserDTO
 *
 * @package App\DTO\Response
 */
final class UserDTO extends DTO
{
    use SuccessDTOTrait;

    /**
     * @var array
     *
     * @Assert\Type(type="array", groups={"type"})
     */
    private $user;

    /**
     * @return array
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param array $user
     */
    public function setUser($user) : void
    {
        $this->user = $user;
    }
}
