<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.ChainInventory.BlockId</code>
 */
class ChainInventory_BlockId extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     */
    private $hash = '';
    /**
     * Generated from protobuf field <code>int64 number = 2;</code>
     */
    private $number = 0;

    public function __construct() {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @return string
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * Generated from protobuf field <code>bytes hash = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 number = 2;</code>
     * @return int|string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>int64 number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->number = $var;

        return $this;
    }

}

