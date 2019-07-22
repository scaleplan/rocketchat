<?php

namespace Scaleplan\RocketChat\DTO\Request;

use Scaleplan\DTO\DTO;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ChannelCreateDTO
 *
 * @package Scaleplan\RocketChat\DTO\Request
 */
class ChannelCreateDTO extends DTO
{
    /**
     * @var string
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\NotNull()
     * @Assert\Length(min=3)
     */
    private $channelName;

    /**
     * @var array|string[]
     *
     * @Assert\All(
     *     @Assert\Type(type="string"),
     *     @Assert\NotBlank()
     * )
     */
    private $members = [];

    /**
     * @var bool
     *
     * @Assert\Type(type="bool", groups={"type"})
     * @Assert\NotNull()
     */
    private $readOnly = false;

    /**
     * @return string
     */
    public function getChannelName()
    {
        return $this->channelName;
    }

    /**
     * @param string $channelName
     */
    public function setChannelName($channelName) : void
    {
        $this->channelName = $channelName;
    }

    /**
     * @return array|string[]
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * @param array|string[] $members
     */
    public function setMembers($members) : void
    {
        $this->members = $members;
    }

    /**
     * @return bool
     */
    public function isReadOnly()
    {
        return $this->readOnly;
    }

    /**
     * @param bool $readOnly
     */
    public function setReadOnly($readOnly) : void
    {
        $this->readOnly = $readOnly;
    }
}
