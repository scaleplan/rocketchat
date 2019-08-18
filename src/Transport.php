<?php

namespace Scaleplan\RocketChat;

use Lmc\HttpConstants\Header;
use Scaleplan\DTO\DTO;
use Scaleplan\Http\Constants\ContentTypes;
use Scaleplan\Http\Interfaces\RequestInterface;
use Scaleplan\Http\RemoteResponse;
use Scaleplan\RocketChat\DTO\Response\AuthDataDTO;
use function Scaleplan\DependencyInjection\get_required_container;
use function Scaleplan\Helpers\get_required_env;

/**
 * Class RocketChatAPI
 *
 * @package Scaleplan\RocketChat
 */
class Transport
{
    protected const API_ROOT = '/api/v1';

    /**
     * @var string
     */
    protected $token;

    /**
     * @var string
     */
    protected $userId;

    /**
     * @var string
     */
    protected $serviceUrl;

    /**
     * RocketChatAPI constructor.
     *
     * @throws \ReflectionException
     * @throws \Scaleplan\DTO\Exceptions\ValidationException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ContainerTypeNotSupportingException
     * @throws \Scaleplan\DependencyInjection\Exceptions\DependencyInjectionException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ParameterMustBeInterfaceNameOrClassNameException
     * @throws \Scaleplan\DependencyInjection\Exceptions\ReturnTypeMustImplementsInterfaceException
     * @throws \Scaleplan\Helpers\Exceptions\EnvNotFoundException
     * @throws \Scaleplan\Http\Exceptions\ClassMustBeDTOException
     * @throws \Scaleplan\Http\Exceptions\HttpException
     * @throws \Scaleplan\Http\Exceptions\RemoteServiceNotAvailableException
     */
    public function __construct()
    {
        $this->serviceUrl = get_required_env('ROCKETCHAT_URL') . static::API_ROOT;
        /** @var RequestInterface $request */
        $request = get_required_container(
            RequestInterface::class,
            [
                static::API_ROOT . '/login',
                ['user' => get_required_env('ROCKETCHAT_USER'), 'password' => get_required_env('ROCKETCHAT_PASSWORD')],
            ]
        );
        $request->setDtoClass(AuthDataDTO::class);
        $request->setMethod('POST');
        $request->setValidationEnable(true);

        /** @var AuthDataDTO $authData */
        $authData = $request->send()->getResult();
        $this->token = $authData->getAuthToken();
        $this->userId = $authData->getUserId();
    }

    /**
     * @param string $url
     * @param DTO $data
     * @param string|null $dtoClass
     *
     * @return RemoteResponse
     *
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
    public function send(string $url, DTO $data, string $dtoClass = null) : RemoteResponse
    {
        $data->validate();
        /** @var RequestInterface $request */
        $request = get_required_container(RequestInterface::class, [$this->serviceUrl . $url, $data->toFullArray()]);
        if ($dtoClass) {
            $request->setDtoClass($dtoClass);
            $request->setValidationEnable(true);
        }
        $request->setMethod('POST');
        $request->addHeader('X-Auth-Token', $this->token);
        $request->addHeader('X-User-Id', $this->userId);
        $request->addHeader(Header::CONTENT_TYPE, ContentTypes::JSON);

        return $request->send();
    }
}
