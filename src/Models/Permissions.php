<?php
/*
 * ZeroTierCentralAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ZeroTierCentralAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Permissions implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps {id}
     * @var MId|null $mId public property
     */
    public $mId;

    /**
     * Constructor to set initial or default values of member properties
     * @param MId $mId Initialization value for $this->mId
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->mId = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['{id}'] = $this->mId;

        return $json;
    }
}
