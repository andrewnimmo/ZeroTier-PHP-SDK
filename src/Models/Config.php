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
class Config implements JsonSerializable
{
    /**
     * 16-digit ZeroTier network ID [ro]
     * @var string|null $id public property
     */
    public $id;

    /**
     * 16-digit ZeroTier network ID (for backward compatibility) [ro]
     * @var string|null $nwid public property
     */
    public $nwid;

    /**
     * Short name of network [rw]
     * @var string|null $name public property
     */
    public $name;

    /**
     * Object type on controller ("network") [ro]
     * @var string|null $objtype public property
     */
    public $objtype;

    /**
     * If true, certificate access control is enabled [rw]
     * @maps private
     * @var bool|null $mprivate public property
     */
    public $mprivate;

    /**
     * Time network was created on controller [ro]
     * @var double|null $creationTime public property
     */
    public $creationTime;

    /**
     * Network revision number [ro]
     * @var double|null $revision public property
     */
    public $revision;

    /**
     * Time config was last modified [ro]
     * @var double|null $lastModified public property
     */
    public $lastModified;

    /**
     * Max recipients per multicast or broadcast [rw]
     * @var double|null $multicastLimit public property
     */
    public $multicastLimit;

    /**
     * Array of IP routes published to members [rw]
     * @var array|null $routes public property
     */
    public $routes;

    /**
     * Network base rules table [rw]
     * @var array|null $rules public property
     */
    public $rules;

    /**
     * Array of tags available on this network [rw]
     * @var array|null $tags public property
     */
    public $tags;

    /**
     * Array of capabilities available on this network [rw]
     * @var array|null $capabilities public property
     */
    public $capabilities;

    /**
     * Total number of members [ro]
     * @var double|null $totalMemberCount public property
     */
    public $totalMemberCount;

    /**
     * Number of active/online members [ro]
     * @var double|null $activeMemberCount public property
     */
    public $activeMemberCount;

    /**
     * Array of authentication tokens for auto-authorizing new members [rw]
     * @var array|null $authTokens public property
     */
    public $authTokens;

    /**
     * Number of authorized members [ro]
     * @var double|null $authorizedMemberCount public property
     */
    public $authorizedMemberCount;

    /**
     * Boolean toggles for IPv4 assignment modes [rw]
     * @var object|null $v4AssignMode public property
     */
    public $v4AssignMode;

    /**
     * Boolean toggles for IPv6 assignment modes [rw]
     * @var object|null $v6AssignMode public property
     */
    public $v6AssignMode;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id                    Initialization value for $this->id
     * @param string $nwid                  Initialization value for $this->nwid
     * @param string $name                  Initialization value for $this->name
     * @param string $objtype               Initialization value for $this->objtype
     * @param bool   $mprivate              Initialization value for $this->mprivate
     * @param double $creationTime          Initialization value for $this->creationTime
     * @param double $revision              Initialization value for $this->revision
     * @param double $lastModified          Initialization value for $this->lastModified
     * @param double $multicastLimit        Initialization value for $this->multicastLimit
     * @param array  $routes                Initialization value for $this->routes
     * @param array  $rules                 Initialization value for $this->rules
     * @param array  $tags                  Initialization value for $this->tags
     * @param array  $capabilities          Initialization value for $this->capabilities
     * @param double $totalMemberCount      Initialization value for $this->totalMemberCount
     * @param double $activeMemberCount     Initialization value for $this->activeMemberCount
     * @param array  $authTokens            Initialization value for $this->authTokens
     * @param double $authorizedMemberCount Initialization value for $this->authorizedMemberCount
     * @param object $v4AssignMode          Initialization value for $this->v4AssignMode
     * @param object $v6AssignMode          Initialization value for $this->v6AssignMode
     */
    public function __construct()
    {
        if (19 == func_num_args()) {
            $this->id                    = func_get_arg(0);
            $this->nwid                  = func_get_arg(1);
            $this->name                  = func_get_arg(2);
            $this->objtype               = func_get_arg(3);
            $this->mprivate              = func_get_arg(4);
            $this->creationTime          = func_get_arg(5);
            $this->revision              = func_get_arg(6);
            $this->lastModified          = func_get_arg(7);
            $this->multicastLimit        = func_get_arg(8);
            $this->routes                = func_get_arg(9);
            $this->rules                 = func_get_arg(10);
            $this->tags                  = func_get_arg(11);
            $this->capabilities          = func_get_arg(12);
            $this->totalMemberCount      = func_get_arg(13);
            $this->activeMemberCount     = func_get_arg(14);
            $this->authTokens            = func_get_arg(15);
            $this->authorizedMemberCount = func_get_arg(16);
            $this->v4AssignMode          = func_get_arg(17);
            $this->v6AssignMode          = func_get_arg(18);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                    = $this->id;
        $json['nwid']                  = $this->nwid;
        $json['name']                  = $this->name;
        $json['objtype']               = $this->objtype;
        $json['private']               = $this->mprivate;
        $json['creationTime']          = $this->creationTime;
        $json['revision']              = $this->revision;
        $json['lastModified']          = $this->lastModified;
        $json['multicastLimit']        = $this->multicastLimit;
        $json['routes']                = $this->routes;
        $json['rules']                 = $this->rules;
        $json['tags']                  = $this->tags;
        $json['capabilities']          = $this->capabilities;
        $json['totalMemberCount']      = $this->totalMemberCount;
        $json['activeMemberCount']     = $this->activeMemberCount;
        $json['authTokens']            = $this->authTokens;
        $json['authorizedMemberCount'] = $this->authorizedMemberCount;
        $json['v4AssignMode']          = $this->v4AssignMode;
        $json['v6AssignMode']          = $this->v6AssignMode;

        return $json;
    }
}
