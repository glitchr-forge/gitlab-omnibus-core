<?php

namespace Omnibus\Core\Model;

use Omnibus\Core\Security\TokenInterface;
use Omnibus\Core\Security\Util\Random;
use Omnibus\Core\Storage\IdentityInterface;

class Token implements TokenInterface
{
    /**
     * @var IdentityInterface
     */
    protected $details;

    /**
     * @var string
     */
    protected $hash;

    /**
     * @var string
     */
    protected $gatewayName;

    public function __construct()
    {
        $this->hash = Random::generateToken();
    }

    /**
     * @return Identity
     */
    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails($details)
    {
        $this->details = $details;
    }

    public function getHash()
    {
        return $this->hash;
    }

    public function setHash($hash)
    {
        $this->hash = $hash;
    }

    public function getGatewayName()
    {
        return $this->gatewayName;
    }

    public function setGatewayName($gatewayName)
    {
        $this->gatewayName = $gatewayName;
    }
}