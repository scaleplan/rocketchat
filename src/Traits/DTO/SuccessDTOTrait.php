<?php

namespace Scaleplan\RocketChat\Traits\DTO;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class SuccessDTOTrait
 *
 * @package Scaleplan\RocketChat\Traits\DTO
 */
trait SuccessDTOTrait
{
    /**
     * @var bool
     *
     * @Assert\Type(type="bool", groups={"type"})
     * @Assert\NotNull()
     */
    private $success;

    /**
     * @return bool
     */
    public function isSuccess()
    {
        return $this->success;
    }

    /**
     * @param bool $success
     */
    public function setSuccess($success) : void
    {
        $this->success = $success;
    }
}
