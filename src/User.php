<?php

namespace Scaleplan\RocketChat;

use Scaleplan\Http\RemoteResponse;
use Scaleplan\RocketChat\DTO\Request\UserAvatarDTO;
use Scaleplan\RocketChat\DTO\Request\UserCreateDTO;
use Scaleplan\RocketChat\DTO\Request\UserDeleteDTO;
use Scaleplan\RocketChat\DTO\Response\SuccessDTO;
use Scaleplan\RocketChat\DTO\Response\UserDTO;
use Scaleplan\RocketChat\Exceptions\MatrixException;

/**
 * Class User
 *
 * @package Scaleplan\RocketChat
 */
final class User extends AbstractAPI
{
    /**
     * @param UserCreateDTO $dto
     *
     * @return RemoteResponse
     *
     * @throws MatrixException
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function create(UserCreateDTO $dto) : RemoteResponse
    {
        $response = $this->api->send('/users.create', $dto, UserDTO::class);
        /** @var SuccessDTO $rocketData */
        $rocketData = $response->getResult();
        if (!$response->isOk() || !$rocketData->isSuccess()) {
            throw new MatrixException($response, 'User create failed.');
        }

        return $response;
    }

    /**
     * @param UserDeleteDTO $dto
     *
     * @return RemoteResponse
     *
     * @throws MatrixException
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function delete(UserDeleteDTO $dto) : RemoteResponse
    {
        $response = $this->api->send('/users.delete', $dto, SuccessDTO::class);
        /** @var SuccessDTO $rocketData */
        $rocketData = $response->getResult();
        if (!$response->isOk() || !$rocketData->isSuccess()) {
            throw new MatrixException($response, 'User delete failed.');
        }

        return $response;
    }

    /**
     * @param UserDeleteDTO $dto
     *
     * @return RemoteResponse
     *
     * @throws MatrixException
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function update(UserDeleteDTO $dto) : RemoteResponse
    {
        $response = $this->api->send('/users.update', $dto, UserDTO::class);
        /** @var SuccessDTO $rocketData */
        $rocketData = $response->getResult();
        if (!$response->isOk() || !$rocketData->isSuccess()) {
            throw new MatrixException($response, 'User update failed.');
        }

        return $response;
    }

    /**
     * @param UserAvatarDTO $dto
     *
     * @return RemoteResponse
     *
     * @throws MatrixException
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function setAvatar(UserAvatarDTO $dto) : RemoteResponse
    {
        $response = $this->api->send('/users.setAvatar', $dto, SuccessDTO::class);
        /** @var SuccessDTO $rocketData */
        $rocketData = $response->getResult();
        if (!$response->isOk() || !$rocketData->isSuccess()) {
            throw new MatrixException($response, 'Avatar update failed.');
        }

        return $response;
    }
}
