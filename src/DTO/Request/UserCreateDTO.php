<?php

namespace Scaleplan\RocketChat\DTO\Request;

use Scaleplan\DTO\DTO;
use Scaleplan\RocketChat\Constants\UserRoles;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class UserCreateDTO
 *
 * @package Scaleplan\RocketChat\DTO\Request
 */
class UserCreateDTO extends DTO
{
    /**
     * @var string
     *
     * @Assert\NotBlank()
     * @Assert\Email()
     */
    protected $email;

    /**
     * @var string
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     */
    protected $name;

    /**
     * @var string
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\NotBlank()
     * @Assert\Length(min=6)
     */
    protected $password;

    /**
     * @var string
     *
     * @Assert\Type(type="string", groups={"type"})
     * @Assert\NotBlank()
     * @Assert\Length(min=3)
     */
    protected $username;

    /**
     * @var bool
     *
     * @Assert\Type(type="bool", groups={"type"})
     * @Assert\NotNull()
     */
    protected $active = true;

    /**
     * @var array|string[]
     *
     * @Assert\Type(type="array", groups={"type"})
     * @Assert\Choice(
     *     multiple=true,
     *     strict=true,
     *     choices=\Scaleplan\RocketChat\Constants\UserRoles::CHAT
     * )
     */
    protected $roles = [UserRoles::USER];

    /**
     * @var bool
     *
     * @Assert\Type(type="bool", groups={"type"})
     * @Assert\NotNull()
     */
    protected $joinDefaultChannels = true;

    /**
     * @var bool
     *
     * @Assert\Type(type="bool", groups={"type"})
     * @Assert\NotNull()
     */
    protected $requirePasswordChange = false;

    /**
     * @var bool
     *
     * @Assert\Type(type="bool", groups={"type"})
     * @Assert\NotNull()
     */
    protected $sendWelcomeEmail = false;

    /**
     * @var bool
     *
     * @Assert\Type(type="bool", groups={"type"})
     * @Assert\NotNull()
     */
    protected $verified = true;

    /**
     * @var array
     */
    protected $customFields = [];

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email) : void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name) : void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password) : void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username) : void
    {
        $this->username = $username;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive($active) : void
    {
        $this->active = $active;
    }

    /**
     * @return array|string[]
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * @param array|string[] $roles
     */
    public function setRoles($roles) : void
    {
        $this->roles = $roles;
    }

    /**
     * @return bool
     */
    public function isJoinDefaultChannels()
    {
        return $this->joinDefaultChannels;
    }

    /**
     * @param bool $joinDefaultChannels
     */
    public function setJoinDefaultChannels($joinDefaultChannels) : void
    {
        $this->joinDefaultChannels = $joinDefaultChannels;
    }

    /**
     * @return bool
     */
    public function isRequirePasswordChange()
    {
        return $this->requirePasswordChange;
    }

    /**
     * @param bool $requirePasswordChange
     */
    public function setRequirePasswordChange($requirePasswordChange) : void
    {
        $this->requirePasswordChange = $requirePasswordChange;
    }

    /**
     * @return bool
     */
    public function isSendWelcomeEmail()
    {
        return $this->sendWelcomeEmail;
    }

    /**
     * @param bool $sendWelcomeEmail
     */
    public function setSendWelcomeEmail($sendWelcomeEmail) : void
    {
        $this->sendWelcomeEmail = $sendWelcomeEmail;
    }

    /**
     * @return bool
     */
    public function isVerified()
    {
        return $this->verified;
    }

    /**
     * @param bool $verified
     */
    public function setVerified($verified) : void
    {
        $this->verified = $verified;
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @param array $customFields
     */
    public function setCustomFields($customFields) : void
    {
        $this->customFields = $customFields;
    }
}
