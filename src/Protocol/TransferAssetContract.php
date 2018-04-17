<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: core/Contract.proto

namespace Protocol;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>protocol.TransferAssetContract</code>
 */
class TransferAssetContract extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes asset_name = 1;</code>
     */
    private $asset_name = '';
    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     */
    private $owner_address = '';
    /**
     * Generated from protobuf field <code>bytes to_address = 3;</code>
     */
    private $to_address = '';
    /**
     * Generated from protobuf field <code>int64 amount = 4;</code>
     */
    private $amount = 0;

    public function __construct() {
        \GPBMetadata\Core\Contract::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bytes asset_name = 1;</code>
     * @return string
     */
    public function getAssetName()
    {
        return $this->asset_name;
    }

    /**
     * Generated from protobuf field <code>bytes asset_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAssetName($var)
    {
        GPBUtil::checkString($var, False);
        $this->asset_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     * @return string
     */
    public function getOwnerAddress()
    {
        return $this->owner_address;
    }

    /**
     * Generated from protobuf field <code>bytes owner_address = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->owner_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes to_address = 3;</code>
     * @return string
     */
    public function getToAddress()
    {
        return $this->to_address;
    }

    /**
     * Generated from protobuf field <code>bytes to_address = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setToAddress($var)
    {
        GPBUtil::checkString($var, False);
        $this->to_address = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 4;</code>
     * @return int|string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Generated from protobuf field <code>int64 amount = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmount($var)
    {
        GPBUtil::checkInt64($var);
        $this->amount = $var;

        return $this;
    }

}

