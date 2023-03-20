<?php

namespace Omnibus\Core\Model;

/**
 * @method array getDetails()
 */
interface ShipmentInterface 
{
    /**
     * @return string
     */
    public function getNumber();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getClientEmail();

    /**
     * @return string
     */
    public function getClientId();
}