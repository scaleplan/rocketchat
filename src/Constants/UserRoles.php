<?php

namespace Scaleplan\RocketChat\Constants;

/**
 * Class UserRoles
 *
 * @package Scaleplan\RocketChat\Constants
 */
class UserRoles
{
    public const ADMIN            = 'admin';
    public const USER             = 'user';
    public const BOT              = 'bot';
    public const ANONYMOUS        = 'anonymous';
    public const GUEST            = 'guest';
    public const LIVECHAT_AGENT   = 'livechat-agent';
    public const LIVECHAT_MANAGER = 'livechat-manager';
    public const LIVECHAT_GUEST   = 'livechat-guest';

    public const ALL = [
        self::ADMIN,
        self::USER,
        self::BOT,
        self::ANONYMOUS,
        self::GUEST,
        self::LIVECHAT_AGENT,
        self::LIVECHAT_MANAGER,
        self::LIVECHAT_GUEST,
    ];

    public const CHAT = [
        self::ADMIN,
        self::USER,
        self::BOT,
        self::ANONYMOUS,
        self::GUEST,
    ];

    public const LIVECHAT = [
        self::LIVECHAT_AGENT,
        self::LIVECHAT_MANAGER,
        self::LIVECHAT_GUEST,
    ];
}
