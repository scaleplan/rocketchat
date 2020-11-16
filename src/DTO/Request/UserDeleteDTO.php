<?php

namespace Scaleplan\RocketChat\DTO\Request;

use Scaleplan\DTO\DTO;
use Scaleplan\RocketChat\Traits\DTO\UserIdDTOTrait;

/**
 * Class UserDeleteDTO
 *
 * @package Scaleplan\RocketChat\DTO\Request
 */
final class UserDeleteDTO extends DTO
{
    use UserIdDTOTrait;
}
