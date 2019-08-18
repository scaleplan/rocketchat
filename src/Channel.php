<?php

namespace Scaleplan\RocketChat;

use Scaleplan\Http\RemoteResponse;
use Scaleplan\RocketChat\DTO\Request\ChannelCreateDTO;
use Scaleplan\RocketChat\DTO\Response\ChannelDTO;
use Scaleplan\RocketChat\DTO\Response\SuccessDTO;
use Scaleplan\RocketChat\Exceptions\RocketChatException;

/**
 * Class User
 *
 * @package Scaleplan\RocketChat
 */
final class Channel extends AbstractAPI
{
    /**
     * @param ChannelCreateDTO $dto
     *
     * @return RemoteResponse
     *
     * @throws RocketChatException
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
    public function create(ChannelCreateDTO $dto) : RemoteResponse
    {
        $response = $this->api->send('/channels.create', $dto, ChannelDTO::class);
        /** @var SuccessDTO $rocketData */
        $rocketData = $response->getResult();
        if (!$rocketData->isSuccess()) {
            throw new RocketChatException($response, 'Channel create failed.');
        }

        return $response;
    }
}
