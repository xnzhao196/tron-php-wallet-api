<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Discover.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.Endpoint</code>
 */
class Endpoint extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes address = 1;</code>
     */
    private $address = '';
    /**
     * Generated from protobuf field <code>int32 port = 2;</code>
     */
    private $port = 0;
    /**
     * Generated from protobuf field <code>bytes nodeId = 3;</code>
     */
    private $nodeId = '';

    public function __construct() {
        \GPBMetadata\Core\Discover::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes address = 1;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Generated from protobuf field <code>bytes address = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Generated from protobuf field <code>int32 port = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPort($var)
    {
        GPBUtil::checkInt32($var);
        $this->port = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes nodeId = 3;</code>
     * @return string
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * Generated from protobuf field <code>bytes nodeId = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkString($var, False);
        $this->nodeId = $var;

        return $this;
    }

}

