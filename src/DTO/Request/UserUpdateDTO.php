<?php

namespace Scaleplan\RocketChat\DTO\Request;

use Scaleplan\RocketChat\Traits\DTO\UserIdDTOTrait;

/**
 * Class UserUpdateDTO
 *
 * @package Scaleplan\RocketChat\DTO\Request
 */
final class UserUpdateDTO extends UserCreateDTO
{
    use UserIdDTOTrait;

    /**
     * @return array
     */
    public function toFullArray() : array
    {
        $newArray = [];
        foreach (parent::toFullArray() as $key => $value) {
            if ($key === 'userId') {
                $newArray[$key] = $value;
                continue;
            }

            $newArray['data'][$key] = $value;
        }

        return $newArray;
    }
}
