<?php

namespace Scaleplan\RocketChat\DTO\Response;

use Scaleplan\DTO\DTO;
use Scaleplan\RocketChat\Traits\DTO\SuccessDTOTrait;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class ChannelDTO
 */
final class ChannelDTO extends DTO
{
    use SuccessDTOTrait;

    /**
     * @var array
     *
     * @Assert\Type(type="array", groups={"type"})
     */
    private $channel;

    /**
     * @return array
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param array $channel
     */
    public function setChannel($channel) : void
    {
        $this->channel = $channel;
    }
}
