<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Tron.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.BlockHeader</code>
 */
class BlockHeader extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.protocol.BlockHeader.raw raw_data = 1;</code>
     */
    private $raw_data = null;
    /**
     * Generated from protobuf field <code>bytes witness_signature = 2;</code>
     */
    private $witness_signature = '';

    public function __construct() {
        \GPBMetadata\Core\Tron::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.protocol.BlockHeader.raw raw_data = 1;</code>
     * @return \Protocol\BlockHeader_raw
     */
    public function getRawData()
    {
        return $this->raw_data;
    }

    /**
     * Generated from protobuf field <code>.protocol.BlockHeader.raw raw_data = 1;</code>
     * @param \Protocol\BlockHeader_raw $var
     * @return $this
     */
    public function setRawData($var)
    {
        GPBUtil::checkMessage($var, \Protocol\BlockHeader_raw::class);
        $this->raw_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes witness_signature = 2;</code>
     * @return string
     */
    public function getWitnessSignature()
    {
        return $this->witness_signature;
    }

    /**
     * Generated from protobuf field <code>bytes witness_signature = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWitnessSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->witness_signature = $var;

        return $this;
    }

}
